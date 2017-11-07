<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CommentController extends Controller
{
      public function index(Request $request)
    {
            //视频
        $firstMovies = DB::table('data_video_info')->where('category_id', 1)->take(5)->get();
        $twoMovies = DB::table('data_video_info')->where('category_id', 2)->take(5)->get(); 
        $threeMovies = DB::table('data_video_info')->where('category_id', 3)->take(5)->get(); 
        $fourMovies = DB::table('data_video_info')->where('category_id', 4)->take(5)->get(); 

        //广告  
        $lol = DB::table('data_video_AD')->where('id', 1);
        $tb = DB::table('data_video_AD')->where('id', 2);
        $bd = DB::table('data_video_AD')->where('id', 3);
        $sg = DB::table('data_video_AD')->where('id', 4);
        $fei = DB::table('data_video_AD')->where('id', 5);
        //搜索分区
        $qbk = DB::table('data_category');
        //搜索版块
        $bk = DB::table('data_category')->where('id', 1);
        $bktwo = DB::table('data_category')->where('id', 2);
        $bkthree = DB::table('data_category')->where('id', 3);
        $bkfour = DB::table('data_category')->where('id', 4);
        //搜索友情链接
        $lj = DB::table('data_video_Connect');

        //显示广告
        $list = $lol->paginate(1);
        $ad = $tb->paginate(1);
        $ab = $bd->paginate(1);
        $sou = $sg->paginate(1);
        $che = $fei->paginate(1);
        //显示分区
        $part = $qbk->paginate(99);
        //显示版块
        $sect = $bk->paginate(1);
        $secttwo = $bktwo->paginate(1);
        $sectsan = $bkthree->paginate(1);
        $sectfour = $bkfour->paginate(1);
        //显示友情链接
        $connect = $lj->paginate(99);


        //取出videoid 
        $videoid = $request->get('mid');
        // dd($videoid);
        if( empty($videoid) )  return view('errors.503', [
            'msg' => '该视频不存在',
        ]);

        // 以下是电影评论
        // $videoid = 17;//替换
        //$sql = "select * from comment where video_id = " . $videoid;
         $list = DB::table('comment')
                    ->where('video_id','=',$videoid)
                    ->orderBy('id', 'desc')
                    ->get();
        //$list = DB::select($sql)->orderBy('id', 'desc');
        // foreach($list as $k=>$v){
        //     $a = explode(",",$v['path']);
        // }
        $lists = $this->object_array($list);
        $treelist = $this->getSubTree($lists,'parent_id','id',0);
        // var_dump($treelist);die();
        

        // 以下是视频信息
        $movie = DB::table('data_video_info')->find($videoid);
        
        // if(!$movie)  return view('errors.503', [
        //     'msg' => '该视频不存在',
        // ]);

        return view('home.comments.comment',[
            'data'   => $treelist,
            'movie'  => $movie,
            'list'=>$list,
             'ad'=>$ad, 
             'ab'=>$ab, 
             'sou'=>$sou, 
             'che'=>$che, 
             'part'=>$part, 
             'sect'=>$sect, 
             'secttwo'=>$secttwo, 
             'sectsan'=>$sectsan, 
             'sectfour'=>$sectfour, 
             'connect'=>$connect,
             'firstMovies' => $firstMovies,
             'twoMovies'   => $twoMovies,
             'threeMovies'   => $threeMovies,
             'fourMovies'   => $fourMovies,
        ]);

    }

    /**
     *  用户评论 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

      
        //判断是否有userid username
        //否则不予评论
        $user = $request->session()->get('user');
      
        if( empty($user) ){
            return view('errors.503', [
                'msg' => '请登录后在进行评论',
            ]);
        }
        //从cookie/session里面取
        // $userid = $request->session()->get();
        // $username = $request->session()->get();
        // dd($userid);
        $userid = $user['id'];
        $username = $user['username'];
        $videoid = $request->get('videoid');
        $content = $request->get('content');
        if(empty($content)){
            return back()->with('msg','评论不能为空，请重新填写评论！');
        }
        $parent_id = $request->get('parent_id');
        $sql = "insert into comment (user_id,username,parent_id,video_id,content,create_time) values (" . $userid .' , "'. $username . '" , ' . $parent_id . ',' . $videoid . ',"' . $content . '"' . ',"' . date('Y-m-d H:i:s', time()) . '"'.")";
        // if($sql){}
        //var_dump($sql);die();
        $insert = DB::insert($sql);
        if($insert){
            return redirect("/home/comments?mid=".$videoid);
            // return '评论成功!';
        }else{
            return '评论失败!';
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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



    /**
     *无限极分类子孙树 递归
     @param $data array  数据
     @param $parent  string 父级元素的名称 如 parent_id
     @param $son     string 子级元素的名称 如 comm_id
     @param $pid     int    父级元素的id 实际上传递元素的主键
     *
     */
    private function getSubTree($data , $parent , $son , $pid = 0) {
        $tmp = array();
        foreach ($data as $key => $value) {
            if($value[$parent] == $pid) {
                $value['child'] =  $this->getSubTree($data , $parent , $son , $value[$son]);
                $tmp[] = $value;            
            }
        }
        return $tmp;
    }

    //数组转对象
    public function object_array($array) {  
        if(is_object($array)) {  
            $array = (array)$array;  
         } if(is_array($array)) {  
             foreach($array as $key=>$value) {  
                 $array[$key] = $this->object_array($value);  
                 }  
         }  
         return $array;  
    }

}
