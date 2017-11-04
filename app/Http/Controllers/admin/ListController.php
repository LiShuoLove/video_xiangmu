<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use App\Org\Images;
use DB;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       

    // dd($request->all());
        
        //保存搜索条件
  
        $where = [];

        $ob = DB::table('data_video_info');
        
               
          // 判断是否搜索了name字段
        if($request->has('video_info_name')){
   
            // 获取搜索的电影名称字段的值
            $name = $request->input('video_info_name');
            $where['video_info_name'] = $name;

            // dd($video_info_name->first());
            //给查询语句添加上where条件
             $ob->join('data_category', function ($join) use($name) {
              
                $join->on('data_video_info.category_id', '=', 'data_category.id')
                     ->where('data_video_info.video_info_name', 'like', '%'.$name.'%');
                     
                })
             ->select('data_video_info.*', 'data_category.typename');;
        } else {
             $ob = DB::table('data_video_info')
            ->join('data_category', 'data_video_info.category_id', '=', 'data_category.id')
            ->select('data_video_info.*', 'data_category.typename');
        }
        //查询构造器(优雅的)
        $info = $ob ->paginate(3);
        // dd($info);
        //返回一个页面,在页面中显示
        return view('admin.videos.list', ['info'=>$info, 'where'=>$where]);
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //显示添加页面
    public function create()
    {
        
         // return 1111;die;
        return view ('admin.videos.video');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //执行添加
    public function store(Request $request)
    {
        
         // dd($request->all());
        //去除token
        $data = $request->except('_token','query_string');
        //执行添加并得到id
        dd($data);
        $id = DB::table('data_video_info')->insertGetId($data);
        //如果有id说明添加成功
        if($id > 0){
            //跳转到/video,添加闪存
            return redirect('admin/lists')->with('msg','添加成功');
        }
        //dd($res);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 显示详情
    public function show($id)
    {
        
        //

        // return view ('admin.videos.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //修改页面
    public function edit($id)
    {
         
        //查询id=$id
        $data_video_info = DB::table('data_video_info')->where('id', $id)->first();
        // dd($data_video_info);
        return view('admin.videos.edit', ['data_video_info'=>$data_video_info]);

    }

    // *
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    //执行修改
    public function update(Request $request, $id)
    {
        
        $data = $request->except('_token', '_method','query_string');
        $res = DB::table('data_video_info')->where('id', $id)->update($data);
        if($res > 0){
            return redirect('admin/lists')->with('msg', '修改成功');
        }else{
            return redirect('admin/lists')->with('msg', '修改失败(或未修改)');
        }
        // dd($res);
    }

    // /** 
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    //删除
    public function destroy($id)
    {
        // dd($id);
        $res =  DB::table('data_video_info')->where('id', $id)->delete();
        // dd($res);
        if($res > 0){
            return redirect('admin/lists')->with('msg', '删除成功');
        }else{
            return redirect('admin/lists')->with('msg', '删除失败');
        }
    }

     public function doUpload(Request $request)
    {
  
        //获取上传的文件对象
        $file = Input::file('file_upload');
        //判断文件是否有效
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/upload',$newName);
            $filepath = '/upload'.$newName;
            //返回文件的路径
            return  $filepath;
        }
    }

     public function uploadsss(Request $request)
    {
        return 11111;
        // dd($request->all());
        // $filename = $_FILES['file']['name'];
        
        // $key = $_POST['key'];
        // $key2 = $_POST['key2'];

        // if ($filename) {
        //     move_uploaded_file($_FILES["file"]["tmp_name"],
        //       "uploads/" . $filename);
        // }
        // echo $key;
        // echo $key2;
            
     }

    public function upload()
    {
        //获取上传的文件对象
        $file = Input::file('file_upload');
        //判断文件是否有效
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move('upload',$newName);
            $filepath = 'upload/'.$newName;
            //返回文件的路径
            return  $filepath;
        }
    }
        
}

