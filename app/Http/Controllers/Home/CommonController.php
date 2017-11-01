<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Cate;
use App\Http\Model\Config;
use App\Http\Model\Friend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
class CommonController extends Controller
{
    public function __construct()
    {
        //一级导航
        $first = Cate::where('pid', '0')->take(4)->get();
        $link = Friend::get();
        view()->share('first',$first);
        view()->share('link',$link);
    }
}
