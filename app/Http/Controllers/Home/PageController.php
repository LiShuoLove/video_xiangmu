<?php
	
	namespace App\Http\Controllers\Home;

	use App\Http\Controllers\Controller;
	
	use Illuminate\Http\Request;

	use Illuminate\Http\Response;

	class PageController extends Controller
	{
		//广告列表
		public function index(Request $request)
		{
			return view('home.page.page');
		}
	}
