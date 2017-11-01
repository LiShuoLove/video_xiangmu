<?php 
	
	namespace App\Http\Controllers\admin;


	use App\Http\Controllers\Controller;
	
	use Illuminate\Http\Request;


	use Illuminate\Http\Response;




	class ExamineController extends Controller
	{


		// 
		public function examine()
		{
			return view ('admin.message.examine');
		}

		
	}