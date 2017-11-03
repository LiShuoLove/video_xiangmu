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
	        $list = $ob->paginate(10);
	        // dd($list)->all();
			return view ('admin.advertising.advertising', ['list'=>$list]);
		}

		//广告添加
		public function inadd()
		{
			return view ('admin.advertising.add');
		}
		//添加操作
		public function create(Request $request)
		{
			$advertising = $request->except('_token');
			// dd($advertising);
			// 单文件上传
	        // 判断请求对象中是否有需要上传的文件
	        if($advertising['picture'] !== null){
	            //判断文件是否有效
	            if($advertising['picture']->isValid()){
	                //生成上传文件对象
	                $file = $advertising['picture'];
	                //获取后缀名
	                $ext = $file->getClientOriginalExtension();
	//              dd($ext);
	                //随机生成新文件名
	                $picname = time().rand(1000,9999).'.'.$ext;
	                // 另存为
	                $file->move('./upload',$picname);
	                if($file->getError()>0){
	                    echo '上传失败';
	                    die;
	                }else{
	                    echo '上传成功';
	                }
	            }
	        }
	        $advertising['picture']=$picname;
	       	// dd($advertising);
			$id = DB::table('data_video_AD')->insertGetid($advertising);
			if ($id > 0) {
				return redirect('admin/advertising')->with('msg','添加成功');
			}
			
		}

		
		//广告修改
		public function inedit(Request $request)
		{
			$edit = $request->only('id');
			// dd($edit);
			$res = DB::table('data_video_AD')->where('id', $edit);
			$list = $res->paginate(1);
			// dd($res);
			return view('admin.advertising.edit', ['list'=>$list]);	
		}

		//修改操作
		public function update(Request $request)
		{
			$advertising = $request->except('_token');
			$id = $request->only('id');
			// $edit = $request->all();
				// dd($advertising);
			if($advertising['picture'] !== null){
	            //判断文件是否有效
	            if($advertising['picture']->isValid()){
	                //生成上传文件对象
	                $file = $advertising['picture'];
	                //获取后缀名
	                $ext = $file->getClientOriginalExtension();
	//              dd($ext);
	                //随机生成新文件名
	                $picname = time().rand(1000,9999).'.'.$ext;
	                // 另存为
	                $file->move('./upload',$picname);
	                if($file->getError()>0){
	                    echo '上传失败';
	                    die;
	                }else{
	                    echo '上传成功';
	                }
	            }
	        }
	        $advertising['picture']=$picname;

			$res = DB::table('data_video_AD')->where('id', $id)->update($advertising);
			if ($res > 0) {
				return redirect('/advertising')->with('msg','修改成功');
			}else{
				return redirect('/advertising')->with('msg','修改失败');
			}
		}		

		//广告删除
		public function del(Request $request)
		{
				
			$del = $request->only('id');
			// dd($del);
			$res = DB::table('data_video_AD')->where('id', $del)->delete();
	        if($res > 0){
	            return redirect('admin/advertising')->with('msg', '删除成功');
	        }else{
	            return redirect('admin/advertising')->with('msg', '删除失败');
	        }
		}

	}
