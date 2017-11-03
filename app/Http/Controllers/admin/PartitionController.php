<?php
	
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	
	use Illuminate\Http\Request;

	use Illuminate\Http\Response;

	use DB;

	class PartitionController extends Controller
	{
		//分区列表
		public function index(Request $request)
		{
			$where = [];
	        $ob = DB::table('data_video_fq');
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
	        $list = $ob->paginate(10);
	        // dd($list)->all();
			return view ('admin.partition.partition', ['list'=>$list]);
			
		}

		//分区添加
		public function inadd()
		{
			return view ('admin.partition.add');
		}
		//添加操作
		public function create(Request $request)
		{
			$link = $request->all();
			unset($link['_token']);
			// dd($link);
			

			$id = DB::table('data_video_fq')->insertGetid($link);
			if ($id > 0) {
				return redirect('/partition')->with('msg','添加成功');
			}
			
		}

		//分区修改
		public function inedit(Request $request)
		{
			$edit = $request->only('id');
			$res = DB::table('data_video_fq')->where('id', $edit);
			$list = $res->paginate(1);
			return view ('admin.partition.edit', ['list'=>$list]);
		}

		//修改操作
		public function update(Request $request)
		{
			$link = $request->except('_token');
			$id = $request->only('id');
			// dd($link);
			$res = DB::table('data_video_fq')->where('id', $id)->update($link);
			// dd($res);
			if ($res > 0) {
				return redirect('/partition')->with('msg','修改成功');
			}else{
				return redirect('/partition')->with('msg','修改失败');
			}
		}

		//分区删除
		public function del(Request $request)
		{
			// dd($request->all());
			$del = $request->only('id');
			// $del = $request->all();
			// dd($del);
			$res = DB::table('data_video_fq')->where('id', $del)->delete();
	        if($res > 0){
	            return redirect('/partition')->with('msg', '删除成功');
	        }else{
	            return redirect('/partition')->with('msg', '删除失败');
	        }
		}
	}
