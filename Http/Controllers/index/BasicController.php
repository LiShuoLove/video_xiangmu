<?php
	
	namespace App\Http\Controllers\index;

	use App\Http\Controllers\Controller;
	
	use Illuminate\Http\Request;

	use Illuminate\Http\Response;

	class BasicController extends Controller
	{
		//laravel中的request
		public function index()
		{
			return view ('index.basic.basic');
		}

	}
