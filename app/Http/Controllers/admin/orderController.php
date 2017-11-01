<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $order =  DB::table('data_orders')->paginate(2);
            
    
        return view('admin.order.order',['order'=>$order]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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


       $order = DB::table('data_orders')->where('id', $id)->first();


        return view('admin.order.edit',['order'=>$order]);
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


        $res = DB::table('data_orders')->where('id', $id)->update($data);
        if($res > 0){
            return redirect('/order')->with('msg', '修改成功');
        }else{
            return redirect('/order')->with('msg', '修改失败(或者并未修改)');
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

         $res = DB::table('data_orders')->where('id', $id)->delete();
        // dd($res);
                 if($res > 0){
                 return redirect('/order')->with('msg', '删除成功');
                     }else{
                 return redirect('/order')->with('msg', '删除失败');
                 }
    
    }
}
