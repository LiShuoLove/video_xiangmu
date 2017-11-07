<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonalController extends Controller
{
	public function personal(Request $request) 
	{
		// dd($request);die;
		
		$where = [];
		$id = session('user')['id'];
		$row = DB::table('data_user_info')->where('zid','=',$id)->first();		
			// dd($row);
		return view('home.personcenter.personalindex',['row'=>$row]);

	}

	public function update(Request $request)
	{

		$message = $request->except('_token');

		$id = session('user')['id'];
		//$id = $request->only('id');
		
		$res = DB::table('data_user_info')->where('zid','=' ,$id)->update($message);
		if ($res > 0) {
			return redirect('/personalcenter')->with('msg','修改成功');
		}else{
			return redirect('/personalcenter')->with('msg','修改失败');
		}
	}

	public function connectus(Request $request)
	{

		$user_id = session('user')['id'];
		$row = DB::table('user_login')->where('id', $user_id)->first();	
		$data['user_name'] = $row->username;
		$data['content'] = $_POST['content'];
		$data['main'] = $_POST['content'];
		$data['time'] = date('Y-m-d H:i:s');
		$data['type'] = 1;
		$data['examine'] = 1;
		$id = DB::table('data_video_message')->insertGetid($data);
		echo 1;exit();	
	}
}