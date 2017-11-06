<?php
	
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	
	use Illuminate\Http\Request; 

	use Illuminate\Http\Response;

	use DB;

	// class PerfectController extends Controller
	// {    
	// 	//用户信息完善方法
	// 	public function perfect()
	// 	 {	
	// 	 	// return view ('admin.improve.inadd');
	// 	 	// die;
	// 	 	// $perfect=$request->only('id');
	// 	 	// dd($perfect);
	// 	 	// die;
	// 	 	// // dd($request);die;
	// 	 	// $ob=DB::table('data_user_info')

	// 	 	// ->join('data_video_message','data_user_info.user_id','=','data_video_message.id')

	// 	 	// ->select('data_user_info.*','data_video_message.*')

	// 	 	// ->paginate(15);

	// 	 	// // ->get();

	// 	 	//  dd($ob);die;


		 	
		 	
	// 	 	// return view ('admin.improve.inadd',['list'=>$list]);
	// 	 	// dd($res);
	// 		$where = [];
	// 		$ob = DB::table('');
			
	// 		$list = $ob->paginate(10);
	// 		dd($list);
	// 		 // dd($list);
	// 		return view ('admin.improve.inadd',['list'=>$list]);
	// 	}
		 
	// }
	class PerfectController extends Controller
	{
		public function perfect(Request $request)
		{
			$where = [];
			$list = DB::table('data_user_info')->first();
			
			dd($list);die;
			// dd($list);
			 // dd($list);
			return view('admin.improve.inadd',['list'=>$list]);
		}
	}    