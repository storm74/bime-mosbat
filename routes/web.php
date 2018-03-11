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

use App\User;
use App\Insurance;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin'], function (){

	Route::resource('admin/users','AdminUsersController');
	Route::resource('admin/posts','AdminPostsController');
	Route::resource('admin/categories','AdminCategoriesController');
	Route::resource('admin/insurance','AdminInsuranceController');
	Route::get('/admin',function (){
        $insurances = Insurance::all()->sortBy('created_at');
        return view('admin.index',compact('insurances'));
	    })->name('admin_index');

//	Route::get('/ajax',function (){
//		return view('ajax.index');
//	});
//	Route::post('/ajax/back','TestAjaxController@test');

	Route::get('admin/media','AdminMediasController@index')->name('media.index');
	Route::get('admin/media/upload','AdminMediasController@upload')->name('admin.media.upload');
});
