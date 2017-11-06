<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //视频
        $firstMovies = DB::table('data_video_info')->where('category_id', 1)->take(5)->get();
        $twoMovies = DB::table('data_video_info')->where('category_id', 2)->take(5)->get(); 

        //广告  
        $lol = DB::table('data_video_AD')->where('id', 1);
        $tb = DB::table('data_video_AD')->where('id', 2);
        $bd = DB::table('data_video_AD')->where('id', 3);
        $sg = DB::table('data_video_AD')->where('id', 4);
        $fei = DB::table('data_video_AD')->where('id', 5);
        //搜索分区
        $fq = DB::table('data_video_fq');
        //搜索友情链接
        $lj = DB::table('data_video_Connect');

        //显示广告
        $list = $lol->paginate(1);
        $ad = $tb->paginate(1);
        $ab = $bd->paginate(1);
        $sou = $sg->paginate(1);
        $che = $fei->paginate(1);
        //显示分区
        $part = $fq->paginate(99);
        //显示友情链接
        $connect = $lj->paginate(99);
        
        //输出页面
        return view ('home.index.index', [
         'list'=>$list,
         'ad'=>$ad, 
         'ab'=>$ab, 
         'sou'=>$sou, 
         'che'=>$che, 
         'part'=>$part, 
         'connect'=>$connect,
         'firstMovies' => $firstMovies,
         'twoMovies'   => $twoMovies,

            ]);


       
        
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

    public function homes()
    {

                $firstMovies = DB::table('data_video_info')->where('category_id', 1)->take(5)->get();
        $twoMovies = DB::table('data_video_info')->where('category_id', 2)->take(5)->get(); 

        //广告  
        $lol = DB::table('data_video_AD')->where('id', 1);
        $tb = DB::table('data_video_AD')->where('id', 2);
        $bd = DB::table('data_video_AD')->where('id', 3);
        $sg = DB::table('data_video_AD')->where('id', 4);
        $fei = DB::table('data_video_AD')->where('id', 5);
        //搜索分区
        $fq = DB::table('data_video_fq');
        //搜索友情链接
        $lj = DB::table('data_video_Connect');

        //显示广告
        $list = $lol->paginate(1);
        $ad = $tb->paginate(1);
        $ab = $bd->paginate(1);
        $sou = $sg->paginate(1);
        $che = $fei->paginate(1);
        //显示分区
        $part = $fq->paginate(99);
        //显示友情链接
        $connect = $lj->paginate(99);
        
        //输出页面
        return view ('home.index.indes', [
         'list'=>$list,
         'ad'=>$ad, 
         'ab'=>$ab, 
         'sou'=>$sou, 
         'che'=>$che, 
         'part'=>$part, 
         'connect'=>$connect,
         'firstMovies' => $firstMovies,
         'twoMovies'   => $twoMovies,

            ]);

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
