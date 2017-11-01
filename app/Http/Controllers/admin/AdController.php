<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Ad;
use App\Http\Model\User_ad;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //浏览广告
       $data = Ad::all();
        return view('admin.ad.index',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加广告
        return view('admin.ad.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //执行添加

        $input = Input::except('_token','img_src');

//   dd($input);

        //表单验证
        $rule=[
            'name'=>'required',
            'phone'=>'required',
        ];

        $mess=[
            'name.required'=>'姓名必须输入',
            'phone.required'=>'电话必须输入',
        ];
        $dt =  $input['disable_time'];

        $d = $dt+time();

        $dt2 = date("Y-m-d H:i:s",$d);


        $validator = Validator::make($input,$rule,$mess);
        if($validator->passes()){
            $ad = new Ad();
          $ad->name = $input['name'];
          $ad->email = $input['email'];
          $ad->phone = $input['phone'];
          $ad->sex = $input['sex'];
          $ad->disable_time = $dt2;
            //图片上传
            $file = Input::file('img_src');
                $entension = $file->getClientOriginalExtension();//上传文件的后缀名
                $newName = date('YmdHis') . mt_rand(1000, 9999) . '.' . $entension;
                $disk = \Storage::disk('qiniu');
//            七牛的上传方法
                \Storage::disk('qiniu')->writeStream('uploads/' . $newName, fopen($file->getRealPath(), 'r'));

                $ad->img_src = "http://osleeix1f.bkt.clouddn.com/uploads/".$newName;
               $re =  $ad->save();


            if($re){
                return redirect('admin/ad');
            }else{
                return back()->with('errors','广告添加失败');
            }
        }else{
            return back()->withErrors($validator)->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //修改信息
        $data =  Ad::find($id);
        return view("admin.ad.edit",['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //执行修改
       $ad =  Ad::find($id);
        $file = Input::file('img_src');
        $time = $ad->disable_time;
        $disable = $request->input('disable_time');
        $a = strtotime($time)+$disable;

        $ad->disable_time = date('Y-m-d H:i:s',$a);
        if($file) {
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis') . mt_rand(1000, 9999) . '.' . $entension;
            $disk = \Storage::disk('qiniu');
//            七牛的上传方法
            \Storage::disk('qiniu')->writeStream('uploads/' . $newName, fopen($file->getRealPath(), 'r'));
            $ad = Ad::find($id);
            $ad->img_src = "http://osleeix1f.bkt.clouddn.com/uploads/" . $newName;
        }
        $re = $ad->save();

        if($re){
            return redirect('admin/ad');
        }else {
            return back()->with('errors', '广告修改失败');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除
        $re =   Ad::where('id',$id)->delete();
        if($re){
            $data = [
                'status'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'删除失败'
            ];
        }
        return $data;
    }
}
