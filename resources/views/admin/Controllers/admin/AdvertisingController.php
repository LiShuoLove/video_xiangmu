<?php
	
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	
	use Illuminate\Http\Request;

	use Illuminate\Http\Response;

	use DB;

	class AdvertisingController extends Controller
	{
		//广告列表
		public function index(Request $request)
		{
			//保存搜索的条件
	        $where = [];
	        $ob = DB::table('data_video_AD');
	        // dd($ob)->all();
	        // 判断是否搜索了name字段
	        // if($request->has('name')){
	        //     // 获取用户搜索的Name字段的值
	        //     $name = $request->input('name');
	        //     $where['name'] = $name;
	        //     //给查询语句添加上where条件
	        //     $ob->where('name', 'like', '%'.$name.'%');
        	// }	
            
            // 原生sql
	        // $list = DB::select('select * from stu');
	        // 等价于
	        // 查询构造器（优雅）
	        $list = $ob->paginate(3);
	        // dd($list)->all();
			return view ('admin.advertising.advertising', ['list'=>$list]);
		}

		//广告添加
		public function inadd()
		{
			return view ('admin.advertising.add');
		}

		public function create(Request $request)
		{
			$advertising = $request->all();
			unset($advertising['_token']);
			// dd($advertising);

			DB::table('data_video_AD')->insert($advertising);
		}

		
		//广告修改
		public function inedit()
		{
			return view ('admin.advertising.edit');
		}

	}
