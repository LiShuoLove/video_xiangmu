<?php

namespace App\Http\Controllers\admin;

use App\Http\Model\Huser;
use Illuminate\Support\Facades\Crypt;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class HuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //查看前台用户
        //浏览用户信息
        //搜索加分页
        $key = $request->input("keywords");

        if($request->has("keywords")){
            $user = Huser::where('username','like','%'.$key.'%')->paginate(1);
            return view('admin\user\index',['data'=>$user,'key'=>$key]);
        }else{
            $user = Huser::paginate(1);
            return view('admin\user\index',['data'=>$user]);
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        //加载修改用户信息页面
        $data =  Huser::find($id);
        return view("admin.user.edit",['data'=>$data]);
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
        //
        //执行修改用户信息
        $user = Huser::find($id);
        $input = Input::except('_token');

        $user->username =$input['username'];
        $user->email =$input['email'];
        $user->phone =$input['phone'];
        $user->nickname =$input['nickname'];
        // $user->pic =$input['pic'];
        $user->sex =$input['sex'];
        $user->vip_status =$input['vip_status'];


        //表单验证
        $rule=[
            'username'=>'required|between:6,18',
        ];

        $mess=[
            'username.required'=>'用户名必须输入',
            'username.between'=>'用户名在6到18位之间',
        ];

        $validator = Validator::make($input,$rule,$mess);
        if($validator->passes()){
            $re = $user->save();
            if($re){
                return redirect('admin/huser')->with("success",'id为'.$id."的用户信息修改成功");
            }else{
                return back()->with('errors','id为'.$id."的用户信息修改失败");
            }
        }else{
            return back()->withErrors($validator)->withInput();
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
        //
    }
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
}
