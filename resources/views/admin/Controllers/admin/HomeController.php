<?php
	
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	
	use Illuminate\Http\Request;

	use Illuminate\Http\Response;

	class HomeController extends Controller
	{
		//laravel中的request
		public function index()
		{
			return view ('admin.home.home');
		}

	}
