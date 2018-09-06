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


Route::get('course/{alias}', 'Web\CourseController@index');






Route::get('admin/Login', 'Admin\AdminController@getLogin')->name('getLogin');

Route::post('admin/Login', 'Admin\AdminController@postLogin')->name('postLogin');

Route::group(['prefix' => 'admin', 'middleware' => ['admin_login']], function (){
	Route::get('dashBoard', 'Admin\AdminController@dashBoard')->name('dashBoard');

	Route::group(['prefix' => 'course'], function (){
		Route::get('list', 'Admin\CourseController@getListCourse')->name('getListCourse');

		Route::get('insert', 'Admin\CourseController@getInsertCourse')->name('getInsertCourse');

		Route::get('update/{id}', 'Admin\CourseController@getUpdateCourse');

		Route::post('saveCourse', 'Admin\CourseController@postSaveCourse')->name('postSaveCourse');

		Route::post('saveChapter', 'Admin\CourseController@postSaveChapter')->name('postSaveChapter');

		Route::post('list', 'Admin\CourseController@postGetListCourse')->name('postGetListCourse');

		Route::post('getChapter', 'Admin\CourseController@postGetChapter')->name('postGetChapter');

		Route::post('deleteChapter', 'Admin\CourseController@postDeleteChapter')->name('postDeleteChapter');

		Route::post('saveLesson', 'Admin\CourseController@postSaveLesson')->name('postSaveLesson');
	});


});