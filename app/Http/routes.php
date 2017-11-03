<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.index.index');
});

// Route::get('index','HomeController@index');

// Route::get('/home','home\HomeController@index');

// 前台
Route::get('/contact','home\conController@index');
Route::get('/home','home\HomeController@index');

//登录
Route::get('/login','home\LoginController@index');
Route::post('/login', 'home\LoginController@dologin');
//注册
Route::get('/register', 'home\LoginController@register');
Route::post('/register', 'home\LoginController@doregister');

//前台购物车
Route::get('/orders','home\OrderController@index');
//后台未登录
Route::get('admin/logins','admin\AdminController@login');
Route::post('admin/logins','admin\AdminController@dologin');

Route::group(['prefix'=>'admin','middleware'=>'isLogin'],function(){
			//后台已登录
			Route::get('/admins','admin\AdminController@index');
			//用户列表
			Route::get('/user','admin\userController@index');
			// 用户增删改查
			Route::resource('/users','admin\userController');


			//后台评论
			Route::resource('/comment','admin\CommentController');

			// 视频上传
			Route::get('/video','admin\VideoController@index');


			//分区列表
			Route::get('/partition', 'admin\PartitionController@index');
			//添加分区
			Route::get('/partition_add', 'admin\PartitionController@inadd');
			Route::post('/partition_add', 'admin\PartitionController@create');
			//修改分区
			Route::get('/partition_edit', 'admin\PartitionController@inedit');
			Route::post('/partition_edit', 'admin\PartitionController@update');
			//删除分区
			Route::get('/partition_del', 'admin\PartitionController@del');

			//版块列表
			Route::get('/section', 'admin\SectionController@index');
			//添加版块
			Route::get('/section_add', 'admin\SectionController@inadd');
			Route::post('/section_add', 'admin\SectionController@create');
			//修改版块
			Route::get('/section_edit', 'admin\SectionController@inedit');
			Route::post('/section_edit', 'admin\SectionController@update');
			//删除版块
			Route::get('/section_del', 'admin\SectionController@del');

			//广告列表
			Route::get('/advertising', 'admin\AdvertisingController@index');

			//添加广告
			Route::get('/advertising_add', 'admin\AdvertisingController@inadd');
			Route::post('/advertising_add', 'admin\AdvertisingController@create');
			//修改广告
			Route::get('/advertising_edit', 'admin\AdvertisingController@inedit');
			Route::post('/advertising_edit', 'admin\AdvertisingController@update');
			//删除广告
			Route::get('/advertising_del', 'admin\AdvertisingController@del');

			//链接列表
			Route::get('/link', 'admin\LinkController@index');
			//添加链接
			Route::get('/link_add', 'admin\LinkController@inadd');
			Route::post('/link_add', 'admin\LinkController@create');
			//修改链接
			Route::get('/link_edit', 'admin\LinkController@inedit');
			Route::post('/link_edit', 'admin\LinkController@update');
			//删除链接
			Route::get('/link_del', 'admin\LinkController@del');
			// 后台留言页面
			Route::get('/message','admin\MessageController@index');
			// 后台个人留言页面新增  路由
			Route::get('/message_add','admin\MessageController@inadd');
			Route::post('/message_add','admin\MessageController@accept');

			// 后台个人留言审核
			Route::get('/message_examine','admin\MessageController@examine');

			//后台个人留言删除
			Route::get('/message_del','admin\MessageController@del');

			//后台个人留言编辑
			Route::get('/message_edit','admin\MessageController@edit');
			Route::post('/message_edit','admin\MessageController@update');

			//后台订单系统
			Route::get('/order','admin\orderController@index');
			//订单操作
			Route::resource('/order','admin\orderController');

			//上传图片和视频
			Route::post('/uploads','admin\ListController@doUpload');
			Route::post('/upload', 'admin\ListController@upload');
			Route::post('/uploadsss','admin\ListController@uploadsss');
			//修改
			//视频列表
			Route::resource('/lists','admin\ListController');

	});



