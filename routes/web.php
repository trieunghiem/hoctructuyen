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

Route::get('/', 'Web\HomeController@home')->name('home');






Route::get('admin/Login', 'Admin\AdminController@getLogin')->name('getLogin');

Route::post('admin/Login', 'Admin\AdminController@postLogin')->name('postLogin');

Route::group(['prefix' => 'admin', 'middleware' => ['admin_login']], function (){
	Route::get('dashBoard', 'Admin\AdminController@dashBoard')->name('dashBoard');

	Route::group(['prefix' => 'course'], function (){
		Route::get('insert', 'Admin\CourseController@getInsertCourse')->name('getInsertCourse');
	});


});