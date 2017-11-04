<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
         public function cart()
    {

                
        $cart  = DB::table('data_orders')->where('user_id','=',1)->get();

        return  json_decode($cart);
    
    }


    public function doshop(Request $request)
    {
        //$uid = session('')->uid;
        $cart  = DB::table('goods')->where('gid','=',$request['info'])->first();


         $id = DB::table('crat')->insertGetId(
            [ 'sid' => $cart->sid , 'gid' => $cart->gid , 'gname' => $cart->gname, 'cacount' => 1, 'caprice' => $cart->gprice, 'endprice' => $cart->gprice ,'uid' => 1]
        );


        return  $id;
    }




    public function doAcc(Request $request)
    {
        //$uid = session('')->uid;
        //$uid = $request['uid'];
//        if($request->count == 1) {
//            $cart = DB::table('crat')->whele('cid', '=', $request['cid'])->delete();
//           // DB::delete('delete from crat where cid = ?',  $request['cid']);
//
//        }else {
//
//        }
        //减少数量
        $info = $request->all();
        $count = $info['count'];


        $cid = $info['cid'];




        if ($count == 1) {
           DB::delete('delete from crat where cid = ?', [$cid]);
       } else {
            $count -= 1;
            $caprice = $request['caprice'];
            $endprice = $count * $caprice ;
            DB::update('update crat set cacount = ?, endprice = ? where cid = ?', [$count, $endprice ,  $cid]);
        }


        $cart  = DB::table('crat')->where('uid','=',1)->get();






        return  json_decode($cart);


    }


    //添加数量
    public function doAdd(Request $request)
    {
        //$uid = session('')->uid;
        $info = $request->all();
        $count = $info['count'];
        $count += 1;
        $cid = $info['cid'];
        $caprice = $request['caprice'];
        $endprice = $count * $caprice ;
//
        DB::update('update crat set cacount = ?, endprice = ? where cid = ?', [$count, $endprice ,  $cid]);




        $cart  = DB::table('crat')->where('uid','=',1)->get();






        return  json_decode($cart);
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
