<?php 
	
	namespace App\Http\Controllers\admin;


	use App\Http\Controllers\Controller;
	
	use Illuminate\Http\Request;


	use Illuminate\Http\Response;

	use DB;

	class MessageController extends Controller
	{
		//laravel中的request
		public function index(Request $request)
		{
			$where = [];
			$ob = DB::table('data_video_message');
			$list = $ob->paginate(10);
			// dd($list)->all();
			return view ('admin.message.message',['list'=>$list]);
		}



		// 个人留言信息增加
		public function inadd()
		{
			return view('admin.message.inadd');
		}


		// 接收提交的信息到这里 （还要发送到数据库 可是怎么才能发送到数据库呢 哦····）
		public function accept(Request $request)
		{	

					
			$message = $request->all();
			unset($message['_token']);
			unset($message['query_string']);
			
			// $main=$request->input('main');
			// $time=$request->input('time');
			// $name=$request->input('name');
			// $type=$request->input('type');
			// $content=$request->input('content');
			
			$id = DB::table('data_video_message')->insertGetid($message);
			if($id > 0){
			 return redirect('/message')->with('msg','添加成功');
			  
		}
		
	}
}
	