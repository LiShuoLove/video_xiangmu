<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Respons
     
     */
    public function index(Request $request)
    {
         $where = [];

        $ob = DB::table('data_user_info');
        
    
        
        if($request->has('username')){

            $name = $request -> input('username');
            $where['username'] = $name;
             $ob->where('username', 'like', '%'.$name.'%');

        }


        if($request->has('users_status')){
            $status = $request->input('users_status');

            $where['users_status'] = $status;

            $ob->where('users_status', $status);

        }

         $users = $ob ->paginate(2);
                
       return view('admin.users.user', ['users'=>$users, 'where'=>$where]);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *  
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

         //去除token
         $data = $request->except('_token','query_string');
      
            
        // // // 执行添加并且得到id
        $id = DB::table('data_user_info')->insertGetid($data);
        
        // // //如果有id说明添加成功
        if($id > 0){
        // //     //跳转到/user路由，携带一个闪存
           return redirect('admin/user')->with('msg','添加成功');

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
           
       $user = DB::table('data_user_info')->where('id', $id)->first();


        return view('admin.users.edit',['user'=>$user]);
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
        

         $data = $request->except('_token', '_method','query_string');


        $res = DB::table('data_user_info')->where('id', $id)->update($data);
        if($res > 0){
            return redirect('admin/users')->with('msg', '修改成功');
        }else{
            return redirect('admin/users')->with('msg', '修改失败(或者并未修改)');
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


           
         $res = DB::table('data_user_info')->where('id', $id)->delete();
        // dd($res);
                 if($res > 0){
                 return redirect('admin/user')->with('msg', '删除成功');
                     }else{
                 return redirect('admin/user')->with('msg', '删除失败');
                 }
    }
}
