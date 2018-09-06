<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','PageController@trangChu');

Route::get('admin/login','UserController@getLogin');
Route::post('admin/login','UserController@postLogin');

Route::get('admin/logout','UserController@getLogout');

Route::get('delete','PageController@index');
Route::post('delete', 'PageController@destroy');

Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function(){
	Route::group(['prefix' => 'book'],function(){
		Route::get('list','BookController@getList');

		Route::get('add','BookController@getAdd');

		Route::get('edit/{id}','BookController@getEdit');

		Route::post('add','BookController@postAdd');

		Route::post('edit/{id}','BookController@postEdit');
	});
}); 

