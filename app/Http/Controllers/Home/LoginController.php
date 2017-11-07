<?php

namespace App\Http\Controllers\Home;


use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\User_login;
use App\Model\User_sign;
use iscms\Alisms\SendsmsPusher as Sms;
use Exception;

class LoginController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public  $sms;

    public function __construct(Sms $sms)
    {
        $this->sms=$sms;
    }

    public function index()
    {
        
        return view ('home.Login.Login');
    }
    
    public function dologin(Request $request)
    {
        //
     
         $name = $request->input('tel');
         $password = $request->input('password');
        

        // Index_users_login::where('login_name','like','%'.$name.'%');
        //查询数据库中的所有数据
        // $list = user_login::all();
        $list = DB::table('user_login')->where(['tel' => $name,'password'=> $password])->first();

        // 遍历输出用户名并判断
        if ($list) {
            $user = ['id'=>$list->id,'tel'=>$list->tel,'password'=>$list->password,'lasttime'=>$list->lasttime,'username'=>$list->username];
            $request->session()->put('user', $user);
            return redirect('/home');
        } else {
            return back()->with('msg', '登录失败请重新登录！');
        }



    }

    public function yan(Request $request)
    {

        // return 111;
        // $input = $request->all();
        $tel = $request['shou'];
        $config = [
            'accessKeyId'    => 'LTAIrNGyqZ4EXzNW',
            'accessKeySecret' => 'IVd81pU9uFqIcEB60aElZZ4xS5ZQIC',
        ];
        $client  = new Client($config);
        $sendSms = new SendSms;
        $code = rand(100000, 999999);
        $sendSms->setPhoneNumbers($tel);
        $sendSms->setSignName('祥云微博');
        $sendSms->setTemplateCode('SMS_109030031');
        $sendSms->setTemplateParam(['code' => $code]);
        $a = $client->execute($sendSms);
       
        // $code = session('code',$code);
        session(['code'=>$code]);
        return 'ok';
    }
    







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('home.Login.register');
    }
    public function doregister(Request $request)
        {
            $message = $request->all();
            unset($message['_token']);
            unset($message['query_string']);

            // 获取注册信息
            $tel = $request->input('tel');
             $pwd = $request->input('password');
             $user = $request->input('username');
            // $ip = $_SERVER["REMOTE_ADDR"];
             $time = date("Y-m-d H:i:s");                                 
            // 'phone'=>'regex:/^1[34578][0-9]{9}$/'
              //Model方式获取所有tel字段的内容
            $ob = user_sign::where('tel',$tel)->first();
             if($ob){
              return redirect('/login')->with('msg','用户已经存在');
             }else{
                    //开启事务
                // DB::insert('insert into User_sign (user_id, username,tel,password,created_at) values (?, ?,?,?,?)', [,,$flight->tel,$flight->password,,]);
                \DB::beginTransaction();
                try{
                    // 插入注册表
                    $flight = new User_sign;
                    $flight->tel = $tel;
                    $flight ->username = $user;
                    $flight->password = $pwd;
                    // $flight->register_ip = $ip;
                    // $flight->rg_time= $time;
                    
                    $result1 = $flight->save();

                    //获取注册用户的id
                     $id = user_sign::all()->last()->sid;
                    //插入登录表
                    $flight2 = new User_login;
                    $flight2->username = $user;
                     $flight2->user_id = $id;

                    $flight2->tel = $tel;
                    
                    $flight2->password = $pwd;
                    // $flight->last_login_ip = $ip;
                     $flight2->lasttime= $time;
                     
                    $result2 = $flight2->save();

                    if ($pwd != null && strlen($pwd) >= '6') {
                        
                    }else{
                        return redirect('/register')->with('msg','密码最少6位');
                    }
                    if( strlen($tel) != '11' ){
                         // return redirect('/register')->with('msg','注册成功');
                         return redirect('/register')->with('msg','手机号格式不正确');
                    }
                    if($result1 && $result2){
                        \DB::commit();
                        //重定向到主页
                        $sql = DB::table('user_login')->get();
                        

                         $query = end($sql);
                         DB::table('data_user_info')->insert(
                             ['zid' => $query->user_id]
                         );

                         return redirect('/login')->with('msg','注册成功，请登录');
                    }
        }catch(Exception $e){
            DB::rollback();
            return redirect('/register')->with('msg','注册失败，请重试');
        }
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
        //
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
}