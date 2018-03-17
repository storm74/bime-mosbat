<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostsRequest;
use App\Http\Requests\PostEditRequest;
use App\Post;
use App\Photo;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $posts = Post::all()->sortBy("id");
	    return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$categories = new Category();
	    $all_cat = $categories ->list_array();

	    return view('admin.posts.create',compact('all_cat'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
//    	return $request->status;
	    $input =$request->all();
//	    return $input;
    if ($file = $request->file('photo_id')){
		    $name = time().$file ->getClientOriginalName();
		    $file->move('admin_assets/images/posts',$name);
		    $photo = Photo::create(['path' => $name]);
	    }
	    $input['photo_id'] = $photo->id;
	    $user = Auth::user();
	    $user->posts()->create($input);
	    $message ="نوشته".'  '.$request->title." "."با موفقیت ایجاد شد";
	    Session::flash('added_post',$message);
	    return redirect()->action('AdminPostsController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	    return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	    $categories = new Category();
	    $all_cat = $categories ->list_array();
    	$post = Post::findOrFail($id);
	    return view('admin.posts.edit',compact('post','all_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostEditRequest $request, $id)
    {
	    $post_old_title = Post::findOrFail($id)->title;
	    $post_new_title = $request->title;
	    $input = $request->all();

	    $post = Post::findOrFail($id);
	    if ($file=$request->file('photo_id')){
		    if ($post->photo){
			    $old_photo_name = $post->photo->id;
			    $old_photo_path = $post->photo->post_image();
			    Photo::destroy($old_photo_name);
			    unlink(public_path()."/".$old_photo_path);
		    }
		    $name = time().$file->getClientOriginalName();
		    $file->move('admin_assets/images/posts/',$name);
		    $photo = Photo::create(['path'=>$name]);

		    $input['photo_id'] = $photo->id;
	    }
	    $post->update($input);
	    if($post_new_title==$post_old_title){
		    $message ="نوشته".' '.$post_new_title." "."با موفقیت به روز رسانی شد";
	    }else{
		    $message ="نوشته ".'  '.$post_old_title."  "."به نام "." ".$post_new_title."  "." تغیر یافت و سایر تغیرات نیز با موفقیت ذخیره شدند";
	    }

	    Session::flash('updated_post',$message);
	    return redirect()->action('AdminPostsController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $myPost = Post::findOrFail($id);
	    $title = $myPost->title;
	    $post = Post::findOrFail($id);
	    unlink(public_path()."/".$post->photo->post_image());
	    $photo_id = $post->photo->id;
	    $post->delete();
	    Photo::destroy($photo_id);
	    $message ="نوشته".' '.$title."  "."با موفقیت حذف گردید";
	    Session::flash('deleted_post',$message);
	    return redirect()->action('AdminPostsController@index');

    }
}
