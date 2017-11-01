<?php

namespace App\Http\Controllers\Admin;


use App\Http\Model\Friend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class FriendController extends Controller
{
    //图片上传
    public function upload()
    {
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
//          dd($request->input('keywords'));
            $input = trim($request->input('keywords'));
            $data = Friend::where('web_name','like','%'.$input.'%')->paginate(1);
            return view('admin.friend.index',['data'=>$data,'keys'=>$input]);
        }else{
            $data = Friend::paginate(1);
            return view('admin.friend.index',['data'=>$data]);
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.friend.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token','file_upload');
        $input['created_at'] = time();
        $re = Friend::create($input);
        if($re){
            return redirect('admin/friend');
        }else{
            return back()->with('errors','友情链接添加失败');
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
        $friend = Friend::find($id);
        return view('admin.friend.edit',compact('friend'));
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
        $input = Input::except('_token','_method','file_upload');
        
        $friend = Friend::find($id);
        $re = $friend->update($input);
        if($re){
            return redirect('admin/friend');
        }else{
            return back()->with('errors','友情链接修改失败');
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
        $re = Friend::where('id',$id)->delete();
        if($re){
            $data =[
                'status'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data =[
                'status'=>1,
                'msg'=>'删除失败'
            ];
        }
        return $data;
    }
}
