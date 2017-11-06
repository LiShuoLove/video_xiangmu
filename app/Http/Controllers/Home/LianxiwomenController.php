<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LianxiwomenController extends Controller
{
    public function lianxiwomen()
    {
        return view('home.lianxiwomen.lianxiwomen');
    }
}