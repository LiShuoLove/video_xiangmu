<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Comment;
use DB;



class CommentController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        
        //保存搜索条件
  
        $where = [];

        // $comment->where('comment', 'like', '%'.$comment.'%');
        // $comment->get();
        // $comment->where()->paginate();

        $comment = DB::table('comment')
                    ->join('data_category','category_id','=','data_category.id')
                    ->select('comment.*','data_category.*','comment.id');
                    
            
                    // dd($comment);
        // dd($comment->first());
               
        // 判断是否搜索了name字段
        if($request->has('username')){
   
            // 获取用户搜索的评论人名称字段的值
            $username = $request->input('username');
            // dd($username->first());
            // dd($username);
            
            //给查询语句添加上where条件
            $comment->where('username', 'like', '%'.$username.'%');
            $where['username'] = $username;
        }
        
        //查询数据
        //原生sql
         // $list = DB::select('select * from comment ');
         // dd($list);
        //查询构造器(优雅的)
        $list = $comment ->paginate(100);
        // dd($list);
        //返回一个页面,在页面中显示
        return view('admin.comments.comment', ['comment'=>$list, 'where'=>$where]);
     
        

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
        return view ('admin.comments.add');
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
        // dd($data);
        $id = DB::table('comment')->insertGetId($data);
        //如果有id说明添加成功
        if($id > 0){
            //跳转到/comment,添加闪存
            return redirect('admin/comment')->with('msg','添加成功');
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

        // return view ('admin.comments.edit');
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
        // return 11;
        //查询id=$id
        $comment = DB::table('comment')->where('id', $id)->first();
        // dd($comment);
        return view('admin.comments.edit', ['comment'=>$comment]);

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
        $res = DB::table('comment')->where('id', $id)->update($data);
        if($res > 0){
            return redirect('admin/comment')->with('msg', '修改成功');
        }else{
            return redirect('admin/comment')->with('msg', '修改失败(或未修改)');
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
        $res =  DB::table('comment')->where('id', $id)->delete();
        // dd($res);
        if($res > 0){
            return redirect('admin/comment')->with('msg', '删除成功');
        }else{
            return redirect('admin/comment')->with('msg', '删除失败');
        }
    }
}
