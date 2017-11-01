<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//引入验证码类
require_once app_path().'\Org\code\Code.class.php';
use App\Org\code\Code;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Model\User;


class LoginController extends Controller
{
    //
    public function code()
    {
        $code = new Code();
        return $code->make();
    }
    public function login()
    {
        //dd(Crypt::encryptString('123456'));
        //dd(Crypt::decryptString('eyJpdiI6InpTSFlmYjZ1Nkk0WFIwUzQ3RHM0dlE9PSIsInZhbHVlIjoibnowTzVoK2ZzRTRJNXAxTmZpY3pmQT09IiwibWFjIjoiNGVhMDJmZDM4NGMwNTQyOTEyNTNmZGU4NTVhYTg4ZWU2MGNlZWIwMzYwMDAxZTE4MDc4Nzk5OTAyNGY0OGIzZCJ9'));
        return view("admin.login");
    }

    public function doLogin()
    {
        $input = Input::except('_token');
        $code = Session::get("code");
        //判断验证码是否正确
        if(strtoupper($input['code']) != $code){
            return back()->with('error','验证码错误');
        }
        //查询账号
        $user = User::where('username',$input['username'])->first();
        /*if(!$user){
            return back()->with('error','此用户不存在');
        }*/
        //判断用户是否存在
        if(empty($user)){
            return back()->with('error','用户不存在');
        }
        //判断密码是否正确
        if($input['pass']!= Crypt::decryptString($user->pass)){
            return back()->with('error','密码错误');
        }
        //吧用户信息放入Session中
        Session::put('user',$user);
        return redirect('admin');
    }

    public function quit()
    {
        session()->forget('user');
        return redirect('admin/login');
    }
}
