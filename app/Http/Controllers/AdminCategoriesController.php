<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$categories = Category::all()->sortBy("id");
//	    foreach($categories as $category){
//
//		 		echo $category->id;
//
//	    }

//    	return $categories[0]->id;
       return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Category::create($input);
	    $message ="دسته بندی".' '.$request->name." "."با موفقیت ایجاد شد";
	    Session::flash('added_category',$message);
	    return redirect()->action('AdminCategoriesController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$category = Category::findOrFail($id);
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$category = Category::findOrFail($id);
	    $category_old_title = $category->name;
	    $category_new_title = $request->name;
    	$input = $request->all();
	    $category->update($input);
	    if($category_new_title==$category_old_title){
		    $message ="حساب کاربری".' '.$category_new_title." "."با موفقیت به روز رسانی شد";
	    }else{
		    $message ="حساب کاربری".' '.$category_old_title." "."به نام "." ".$category_new_title." "." تغیر یافت و سایر تغیرات نیز با موفقیت ذخیره شدند";
	    }

	    Session::flash('updated_category',$message);
	    return redirect()->action('AdminCategoriesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$category = Category::findOrFail($id)->name;
	    Category::destroy($id);
	    $message ="دسته بندی".' '.$category." "."با موفقیت حذف گردید";
	    Session::flash('deleted_category',$message);
	    return redirect()->action('AdminCategoriesController@index');
    }
}
