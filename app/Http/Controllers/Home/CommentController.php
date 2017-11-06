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
        //取出videoid 
        $videoid = $request->get('mid');
        if( empty($videoid) )  return view('errors.503', [
            'msg' => '该视频不存在',
        ]);

        // 以下是电影评论
        // $videoid = 17;//替换
        $sql = "select * from comment where video_id = " . $videoid;
        $list = DB::select($sql);
        // foreach($list as $k=>$v){
        //     $a = explode(",",$v['path']);
        // }
        $lists = $this->object_array($list);
        $treelist = $this->getSubTree($lists,'parent_id','id',0);
        //var_dump($treelist);die();
        

        // 以下是视频信息
        $movie = DB::table('data_video_info')->find($videoid);
        
        // if(!$movie)  return view('errors.503', [
        //     'msg' => '该视频不存在',
        // ]);

        return view('home.comments.comment',[
            'data'   => $treelist,
            'movie'  => $movie,
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
        // if(!$userid){
        //     return false;
        // }
        //从cookie/session里面取
        //dd(1);
        $userid = 11;
        $username = '马燕飞';
        $videoid = 17;
        $content = $request->get('content');
        $parent_id = $request->get('parent_id');
        $sql = "insert into comment (user_id,username,parent_id,video_id,content,create_time) values (" . $userid .' , "'. $username . '" , ' . $parent_id . ',' . $videoid . ',"' . $content . '"' . ',"' . date('Y-m-d H:i:s', time()) . '"'.")";

        //var_dump($sql);die();
        $insert = DB::insert($sql);
        if($insert){
            alert('评论成功!');
            return view('11');
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
