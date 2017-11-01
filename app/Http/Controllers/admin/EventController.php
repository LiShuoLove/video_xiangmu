<?php

namespace App\Http\Controllers\Admin;



use App\Http\Model\Event;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function upload()
    {
//        dd(Input::all());
        $file = Input::file('file_upload');
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/uploads',$newName);
            $filepath = 'uploads/'.$newName;
            return  $filepath;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
        if($request->has('keywords')){
          //dd($request->input('keywords'));
            $input = trim($request->input('keywords'));
            //获取所有的用户记录
            $event = Event::where('title','like','%'.$input.'%')->paginate(1);
            return view('admin.event.index',['data'=>$event,'keys'=>$input]);
        }else{
            $event = Event::paginate(1);
            return view('admin.event.index',['data'=>$event]);
        }


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.event.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input = Input::except('_token','file_upload');
          $rule=[
            'title'=>'required',
            
        ];

        $mess=[
            'title.required'=>'活动名称必须输入',
                    ];

        $validator =  Validator::make($input,$rule,$mess);
        if($validator->passes()){

            $re = Event::create($input);
            if($re){
                return redirect('admin/event');
            }else{
                return back()->with('errors','活动添加失败');
            }
        }else{
            return back()->withErrors($validator);
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
         $data =  Event::where('id',$id)->first();
        //可以使用compact函数给模板传变量
        return view('admin.event.edit',compact('data'));
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
        $input = Input::except(['_token','_method','file_upload']);
        //dd($input);
        $re = Event::where('id',$id)->update($input);

        if($re){
            return redirect('admin/event');
        }else{
            return back()->with('errors','活动修改失败');
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
         $re = Event::where('id',$id)->delete();
        if($re){
            $data = [
                'status'=>0,
                'msg'=>'活动删除成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'活动删除失败'
            ];
        }
        return $data;
    }

}