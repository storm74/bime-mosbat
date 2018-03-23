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

Route::get('/home','PostsController@home_post_section')->name('home');
Route::get('/','PostsController@home_post_section');
Route::get('blog','PostsController@blog_home')->name('blog-home');
Route::get('blog/{title}/{id}','PostsController@blog_single')->name('blog-single');
Route::post('blog/comment/store','PostsController@commentStore');

Auth::routes();
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
	Route::patch('admin/media','AdminMediasController@store')->name('admin.media.store');


    Route::resource('admin/comments','PostCommentsController');
    Route::post('admin/comments/approve','PostCommentsController@approve')->name('comment.approve');
    Route::post('admin/comments/table','PostCommentsController@indexTable')->name('comment.table');
    Route::resource('admin/comment/replies','CommentRepliesController');

    Route::get('/admin/fire',function (){
        return view('admin.nodata');
    })->name('admin.fire');
    Route::get('/admin/life',function (){
        return view('admin.nodata')->name('admin.life');
    });
});
Route::get('/status',function (){
    return view('auth.login');
});


