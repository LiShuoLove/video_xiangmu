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
    return view('welcome');
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

//后台
//后台首页
Route::get('/admins','admin\AdminController@index');
//用户列表
Route::get('/user','admin\userController@index');
// 用户增删改查
Route::resource('/users','admin\userController');


//后台评论
Route::resource('/comment','admin\CommentController');

// 视频上传
Route::get('/video','admin\VideoController@index');


//广告列表
Route::get('/advertising', 'admin\AdvertisingController@index');

//添加广告
Route::get('/advertising_add', 'admin\AdvertisingController@inadd');
Route::post('/advertising_add', 'admin\AdvertisingController@create');
//修改广告
Route::get('/advertising_edit', 'admin\AdvertisingController@inedit');

//链接列表
Route::get('/link', 'admin\LinkController@index');
//添加链接
Route::get('/link_add', 'admin\LinkController@inadd');
//修改链接
Route::get('/link_edit', 'admin\LinkController@inedit');

// 后台留言页面
Route::get('/message','admin\MessageController@index');
// 后台个人留言页面新增  路由
Route::get('/message_add','admin\MessageController@inadd');
Route::post('/message_add','admin\MessageController@accept');

// 后台个人留言审核
Route::get('/examine','admin\ExamineController@examine');

//后台订单系统
Route::get('/order','admin\orderController@index');
//订单操作
Route::resource('/order','admin\orderController');

//上传图片和视频
Route::post('/uploads','admin\ListController@doUpload');

Route::post('/uploadsss','admin\ListController@uploadsss');
//修改
//视频列表
Route::resource('/lists','admin\ListController');

