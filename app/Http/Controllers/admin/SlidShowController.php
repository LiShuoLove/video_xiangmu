<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Slidshow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class SlidShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //浏览轮播图
        $data = Slidshow::get();
        return view('admin.slidshow.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加轮播图页面
        return view('admin.slidshow.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Input::except('_token');
        if($data['img_src']) {
            //图片上传

            $entension = $data['img_src']->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis') . mt_rand(1000, 9999) . '.' . $entension;
            $disk = \Storage::disk('qiniu');
//           七牛的上传方法
            \Storage::disk('qiniu')->writeStream('uploads/' . $newName, fopen($data['img_src']->getRealPath(), 'r'));

           $data['img_src'] = "http://osleeix1f.bkt.clouddn.com/uploads/" . $newName;

        }


//        dd($data);
       $re= Slidshow::create($data);
        if($re){
            return redirect('admin/slidshow');
        }else{
            return back()->with('errors','轮播图添加失败');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //修改轮播图
        $data =  Slidshow::find($id);
        return view("admin.slidshow.edit",['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //执行修改
        $data = Input::except('_token');

        if($data['img_src']) {


            $entension = $data['img_src']->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis') . mt_rand(1000, 9999) . '.' . $entension;
            $disk = \Storage::disk('qiniu');
//            七牛的上传方法
            \Storage::disk('qiniu')->writeStream('uploads/' . $newName, fopen($data['img_src']->getRealPath(), 'r'));

            $data['img_src'] = "http://osleeix1f.bkt.clouddn.com/uploads/" . $newName;

        }
        $a = Slidshow::find($id);
        $re = $a->update($data);
        if($re){
            return redirect('admin/slidshow');
        }else{
            return back()->with('errors','轮播图修改失败');
        }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $re =   Slidshow::where('id',$id)->delete();
        if($re){
            $data = [
                'status'=>0,
                'msg'=>'轮播图删除成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'轮播图删除失败'
            ];
        }
        return $data;


    }


}