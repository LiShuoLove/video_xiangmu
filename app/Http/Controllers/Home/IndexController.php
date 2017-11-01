<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Ad;
use App\Http\Model\Cate;
use App\Http\Model\Collect;
use App\Http\Model\Friend;
use App\Http\Model\History;
use App\Http\Model\Label;
use App\Http\Model\Regidter;
use App\Http\Model\Video;
use App\Http\Model\Huser;
use App\Http\Model\Register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class IndexController extends CommonController
{
    //加载前台首页
    public function index()
    {
        //一级导航

        //$first = Cate::where('pid','0')->get();
        //轮播推荐电影
        $hot = Video::where('status',3)->orderBy('click')->take(6)->get();
        $new = Video::where('status','<>','0')->orderBy('created_at','desc')->take(9)->get();
        //推荐电影
        $mov = Cate::where('cate_name','电影')->first();
        //$cate =  Cate::where('pid',$mov->id)->get();
        $first = Cate::where('pid','0')->get();
//        dd($data);
        return view('home\show\index',compact('hot','new'));

    }
    //加载视频列表
    public function lists($id)
    {
        //一级分类
        $cate = Cate::find($id);
        //二级分类
        $second = Cate::where('pid',$id)->get();
        //查询电影
        $video = [];
        $videos = [];
        foreach($second as $k=>$v){
              $mov = Cate::find($v->id)->video->where('status',3);
              $mv = Cate::find($v->id)->video->take(9);
              foreach($mov as $n=>$m){
                  $video[] = $m;
              }
            foreach($mov as $a=>$b){
                $videos[] = $b;
            }
        }
        //dd($video);
        return view('home\show\list',compact('second','cate','video','videos'));
   }
    //加载视频播放页
    public function play($id)
    {

        $but = '收藏';
        if(session('Huser')){
            $uid =  Session::get('Huser')->id;
           $coll = Collect::where('user_id',$uid)->get();
           //dd($id);
            $collect=[];
           foreach($coll as $v){
              $collect[]=$v->video_id;
           }
            if(in_array($id,$collect)){
                $but = "取消收藏";
            }
            $bid =1;
            //添加翻放录
            $hist = History::where('video_id',$id)->where('user_id',$uid)->get();
            if(empty($hist[0])){
                $his['user_id'] = Session::get('Huser')->id;
                $his['video_id'] = $id;
                $his['created_at'] = time();
                History::create($his);
            }
        }else{
            $bid = 0;
        }
        Video::where('id',$id)->increment('click');

        //视频播放数据
        $data = Video::where('id',$id)
            ->first();
        //分类
        //一级分类
        $cate = Cate::find($data->first_id);
        //二级分类
        $second = Cate::where('pid',$data->first_id)->get();
//        dd($data);
        //根据发布时间查询八条视频
        $new = Video::orderBy('created_at','desc')
            ->take(8)
            ->get();
//        dd($new);
        //根据点击量查询八条视频
        $hot = Video::orderBy('click','desc')
            ->take(8)
            ->get();
        //随机查询八条视频  小编推荐视频
        $recommend = Video::orderBy(\DB::raw('RAND()'))
            ->take(6)
            ->get();
        //查询广告信息
        $ad = Ad::where('id',1)
            ->get();

      // 查询标签对应电影
        $bq = Video::select('content','id')
            ->take(8)
            ->get();
//        dd($bq);
        //查询所有分类信息
        $ptype = Cate::select('cate_name','id')
            ->where('pid','0')
            ->take(8)
            ->get();
        $ztype = Cate::select('cate_name','id')
            ->where('pid','<>',"0")
            ->take(16)
            ->get();


        return view('home\show\play',['data'=>$data,'new'=>$new,'hot'=>$hot,'recommend'=>$recommend,'ad'=>$ad,'bq'=>$bq,'ptype'=>$ptype,'ztype'=>$ztype,'but'=>$but,'bid'=>$bid,'cate'=>$cate,'second'=>$second]);

    }
    //加载主题页面
    public function subject($id)
    {
        $cid = $id;
        $cate = Cate::find($id);
        $parent = Cate::find($cate->pid);
        //二级分类
        $second = Cate::where('pid',$cate->pid)->get();
       //视频
        $video= Cate::find($cate->id)->video->where('status',3)->take(7);

        $videos = Cate::find($cate->id)->video;
        //dd($video);
        return view('home\show\subject',compact('second','parent','video','videos','cid'));
    }

    //加载登陆页
    public function login()
    {
        return view('home\login\login');
    }
    //执行的登录
    public function dologin()
    {   
        $input = Input::except('_token');
       //dd($input);
        //查询账号
        $Huser = Huser::where('username',$input['username'])->first();
        $code = Session::get('code');
        if(strtoupper($input['code']) != $code){
            return back()->with('error','验证码错误');
        }
        //判断用户是否存在
        if(empty($Huser)){
            return back()->with('error','用户不存在，请注册！');
        }
        //判断密码是否正确
        
        if($input['pass']!= Crypt::decrypt($Huser->pass)){
            return back()->with('error','密码错误');
        }
        //吧用户信息放入Session中
        Session::put('Huser',$Huser);
        return redirect('/');
    }
    //加载注册页面
    public function register()  
    {
        return view('home\login\register');
    }
//    注册
    public function doregister()
    {
        $input = Input::except('_token',"repass");
        $data = Register::where('username',$input['username'])->first();
         if(!empty($data)){
            return back()->with('error','用户名已存在');
        }
        $input['pass']=Crypt::encrypt($input['pass']);
        Huser::create($input);
        $re = Register::create($input);
        
        if($re){
            return redirect("/");
        }else{
            return back();
        }
    }
//    退出登录
     public function quit()
    {
        session()->forget('Huser');
        return redirect('/');
    }
//
    public function mycenter()
    {
        $id = Session::get('Huser')->id;

        $users[] = Huser::find($id);

        $user=\DB::table('user_detail')
            ->where('id',$id)
            ->get();

        $record=\DB::table('user_detail')
            ->where('id',$id)
            ->get();
//收藏
        $collections=\DB::table('video_detail')
            ->join('user_collect','user_collect.video_id', '=', 'video_detail.id')
            ->where('user_collect.user_id','=',$id)
            ->orderby('user_collect.id','desc')
            ->get();
//播放记录
//
        $history = History::where('user_id',$id)->get();
        $hist = [];
        foreach($history as $a){
            $hist[] = Video::find($a->video_id);
        }
        //dd($hist);
        $message=\DB::table('user_detail')
            ->where('id',$id)
            ->get();
        $uvideo = \DB::table('user_detail')
            ->where('id',$id)
            ->get();
        $vcomment=\DB::table('user_detail')
            ->where('id',$id)
            ->get();
        $poters=\DB::table('user_detail')
            ->where('id',$id)
            ->get();
        $ad=\DB::table('user_detail')
            ->where('id',$id)
            ->get();
        $brand=\DB::table('user_detail')
            ->where('id',$id)
            ->get();


        //获取所有的请求参数

        return view('home.user.geren',['users'=>$users,'ad'=>$ad,'brand'=>$brand,'user'=>$user,'poters'=>$poters,'record'=>$record,'collections'=>$collections,'message'=>$message,'uvideo'=>$uvideo,'vcomment'=>$vcomment,'hist'=>$hist]);
    }
//修改密码
    public function password(Request $request)
    {

        $input = $request->except('_token');
        $input['pass'] = Crypt::encrypt($input['pass']);
        $user = Huser::find($input['id']);
        //dd($user);
        $re = $user->update($input);
        if($re){
            return 1;
        }else{
            return 0;
        }
    }

    //要用ajax进行修改个人信息
    public function myupdate(Request $request)
    {
        $input = $request->except('_token');
        $user = Huser::find($input['id']);
        //查询改用户名
        $res = $user->update($input);
        if($res){
            return 1;
        }else{
            return 0;
        }
    }
    //收藏
    public function collection($id)
    {
        $data['user_id'] = Session::get('Huser')->id;
        $data['video_id'] = $id;
        Collect::create($data);
        return('1');
    }
    public function dcollection($id)
    {

        $coll = Collect::where('video_id',$id)->delete();
        if($coll) {
            return ('1');
        }
        return 2;
    }

    /*
   上传图片insert
   $res为修改的图片名称
   */
    public function postInsert(Request $request)
    {
        $id = session('uid');
        //获取信息
        $data = $request->except(['_token']);
        // dd($data);
        //调用图片路径信息
        $data['portrait'] = $this->ppload($request);
        $suffix = $request->file('portrait')->getClientOriginalExtension();
        $arr = ['png','jpg','jpeg','gif'];
        if(!in_array($suffix,$arr)){
            return back();
        }
        //添加到数据库
        $res = \DB::table('user_detail')->where('uid',$id)->update($data);
        //判断
        if($res){
            return redirect('geren/index');
        }else{
            return back()->withInput();
        }
    }
    //为图片准备的图片上传函数
    /*
    $name随机生成的文件名
    $suffix文件后戳
    $arr文件格式
    */
    public function ppload(Request $request)
    {
        //判断文件是否上传
        if($request->hasFile('portrait')){
            //随机生成文件名
            $name = md5(time()+rand(100000,999999));
            //获取文件后缀名
            $suffix = $request->file('portrait')->getClientOriginalExtension();
            //文件格式
            $arr = ['png','jpg','jpeg','gif'];
            //判断文件格式是否正确
            if(!in_array($suffix,$arr)){
                return back();
            }
            //上传到指定路径
            $request->file('portrait')->move('./public/portrait/',$name.'.'.$suffix);
            //返回路径
            // dd($request->file('url'));
            return '/public/portrait/'.$name.'.'.$suffix;
        }
    }

    public function add(Request $request)
    {
        $input = $request->except('_token');
        $input['user_id'] = Session::get('Huser')->id;
        $re =  Idea::create($input);
        if($re) {
            return redirect('/mycenter');
        }
    }

}
