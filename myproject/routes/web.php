<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hoclaravel', function(){
	echo "Chào mừng bạn đến với khóa học Laravel 5.x";
});

Route::get('sayhello/{name?}', function($name = ''){
	echo "Xin chào ". $name;
});

Route::get('math/{st1}/{st2}', function($st1, $st2){
	echo $st1 + $st2;
});

//group routes

Route::group(['prefix'=>'admin'],function(){
	Route::get('home', function(){
		return "Đây là trang chủ!";
	});
	Route::group(['prefix'=>'product'], function(){
		Route::get('add', function(){
			return "Đây là trang sửa sản phẩm!";
		});
	});
});

//Controller

Route::get('controller', 'MyFirstController@testController');

Route::get('get-user/{id}', 'MyFirstController@getInfoUser');

Route::get('view_1', 'DemoController@demoView');

Route::get('demo-queryDB', 'DemoController@queryDB'); //trong file controller them  use Illuminate\Support\Facades\DB

Route::get('demo-eloquent', 'DemoController@eloquent');

Route::get('categories', 'MyFirstController@getCategory');

Route::get('products', 'MyFirstController@getProduct');