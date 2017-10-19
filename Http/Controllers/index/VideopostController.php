<?php
	
	namespace App\Http\Controllers\index;

	use App\Http\Controllers\Controller;
	
	use Illuminate\Http\Request;

	use Illuminate\Http\Response;

	class VideopostController extends Controller
	{
		//laravel中的request
		public function index()
		{
			return view ('index.videopost.videopost');
		}

	}
