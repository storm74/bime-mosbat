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
Route::get('/fire',function (){
//return "<h1 class='center'>This is test page for programmer. Its Not For YOU MAN!!</h1>>";
    return view('front.fire-insurance-result-page');
});
//front insurance routes
Route::post('/fire-result','FrontInsuranceController@fireInsuranceResultPage')->name('fireResult');
Route::post('/fire-result-ajax','FrontInsuranceController@fireInsuranceResultAjax')->name('fireResultAjax');

Route::post('/third-party-result','FrontInsuranceController@thirdpartyInsuranceFromHome')->name('thirdResult');
Route::post('/third-party-result-ajax','FrontInsuranceController@thirdpartyInsuranceAjax')->name('thirdResultAjax');
Route::get('/third-party-family-set/{id}','FrontInsuranceController@personalCarListExtract')->name('modelSet');
//front insurance routes
Route::get('/home','PostsController@home_post_section')->name('home');
Route::get('/','PostsController@home_post_section');
Route::get('blog','PostsController@blog_home')->name('blog-home');
Route::get('blog/{slug}','PostsController@blog_single')->name('blog-single');
Route::post('blog/comment/store','PostsController@commentStore');
Route::post('blog/commentreply/store','PostsController@commentReplyStore');

Auth::routes();
Route::group(['middleware'=>'admin'], function (){

    //admin insurance car routes
    Route::get('admin/personal-car-list','AdminInsuranseController@personalCars')->name('personal-car-list');
    Route::get('admin/personal-car-list-show','AdminInsuranseController@personalCarList')->name('personal-car-list-show');
    Route::get('admin/personal-car-category-list-show','AdminInsuranseController@personalCarCategoryList')->name('personal-car-category-list');
    Route::post('admin/personal-car-category-add','AdminInsuranseController@personalCarsCategoryAdd')->name('personal-car-category-add');
    Route::post('admin/personal-car-add','AdminInsuranseController@personalCarsAdd')->name('personal-car-add');
    Route::post('admin/p-car-category-delete','AdminInsuranseController@personalCarCategoryDelete')->name('personal-car-category-delete');
    Route::post('admin/p-car-delete','AdminInsuranseController@personalCarDelete')->name('personal-car-delete');
	Route::resource('admin/users','AdminUsersController');
	Route::resource('admin/posts','AdminPostsController');
	Route::resource('admin/categories','AdminCategoriesController');
	Route::resource('admin/insurance','AdminInsuranceController');
	Route::post('admin/insurance-third','AdminInsuranceController@thirdPartyEdit');
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


