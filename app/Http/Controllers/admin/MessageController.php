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


		// 个人留言删除
		public function del(Request $request)
		{
			
			 $del = $request->only('id');
			
			$res = DB::table('data_video_message')->where('id', $del)->delete();
			
	        if($res > 0){
	            return redirect('admin/message')->with('msg', '删除成功');
	        }else{
	            return redirect('admin/message')->with('msg', '删除失败');
	        }
		}


		// 个人信息留言编辑
		public function edit(Request $request)
		{
			
			$edit = $request->only('id');                 
			
			$res = DB::table('data_video_message')->where('id', $edit);

			$list = $res->paginate(1);

			return view('admin.message.edit',['list'=>$list]);
			
		}
		// 个人信息留言编辑
		public function update(Request $request)
		{

			$message = $request->except('_token');

			$id = $request->only('id');
			
			$res = DB::table('data_video_message')->where('id', $id)->update($message);
			if ($res > 0) {
				return redirect('admin/message')->with('msg','修改成功');
			}else{
				return redirect('admin/message')->with('msg','修改失败');
			}
		}


		// 个人信息审核
		public function examine(Request $request)
    {
    	$id=$request->all();
    	$id=$id['id'];
    	// dd($id);
        $res = DB::table('data_video_message')->where('id', $id)->first();
        // dd($res);
        if ($res->examine == 0) {
            $res->examine = 1;
            //dd($res);
            $res = $res->examine;
            $res = DB::table('data_video_message')->where('id', $id)->update(['examine'=>$res]);
    //       dd($res);
            return redirect('admin/message');
        } else {
            $res->examine = 1;
            //dd($res);
            $res = $res->examine;
            $res = DB::table('data_video_message')->where('id', $id)->update(['examine'=>$res]);
//          dd($res);
            return redirect('admin/message');
        }
      
    }


		// 接收提交的信息到这里 （还要发送到数据库 可是怎么才能发送到数据库呢 哦····）
		public function accept(Request $request)
		{	

					
			$message = $request->all();
			unset($message['_token']);
			unset($message['query_string']);
			
			$id = DB::table('data_video_message')->insertGetid($message);
			if($id > 0){
			 return redirect('admin/message')->with('msg','添加成功');
			  
			}
		
		}
}
	