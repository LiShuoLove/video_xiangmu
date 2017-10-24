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

//后台

Route::get('/admins','admin\AdminController@index');

Route::get('/user','admin\userController@index');

Route::get('/add','admin\userController@create');
