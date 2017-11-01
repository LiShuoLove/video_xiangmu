<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //加载后台首页
    public function index()
    {
//        echo 111;
        return view('admin\index');
    }

    public function info()
    {
        return view('admin\info');
    }
}
