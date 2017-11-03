<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Model\Data_admin_user;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
   
       return view('admin.users.index');
    }



    public function login()
    {
        return view('admin.logins.login');
    }

    public function dologin(Request $request)
    {
        $name = $request->input('name');
         $pwd = $request->input('password');

        $list = new data_admin_user;
        $res = $list->where('name',$name)->first();
        if($res == null){
            return redirect('admin/logins')->with('msg','用户不存在');
        } else {
           if($res->password == $pwd){
                session_start();
                $request->session()->put('aname',$name);
               return redirect('admin/admins');
           } else {
                return redirect('admin/logins')->with('msg','密码错误');
           }
        }
                
    }











    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      // $list = DB::table('data_user_info');
      // dd($list);
      //   return view('admin.user');
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
}
