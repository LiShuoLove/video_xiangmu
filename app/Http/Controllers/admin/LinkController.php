<?php
	
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	
	use Illuminate\Http\Request;

	use Illuminate\Http\Response;

	class LinkController extends Controller
	{
		//链接列表
		public function index()
		{
			return view ('admin.links.link');
		}
		//链接添加
		public function inadd()
		{
			return view ('admin.links.add');
		}
		//链接修改
		public function inedit()
		{
			return view ('admin.links.edit');
		}

	}
