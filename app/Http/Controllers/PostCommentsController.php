<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all()->sortByDesc('created_at');
        return view('admin.comments.index',['comments'=>$comments]);
    }
    public function indexTable(){
        $comments = Comment::all()->sortByDesc('created_at');
        return view('admin.includes.index_comments_table',['comments'=>$comments]);
    }//it will use for ajax reload of table

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->postComments;
        return view('admin.comments.show',['comments'=>$comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::destroy($id);
        $message ="دیدگاه مورد نظر با موفقیت حذف گردید.";
        Session::flash('deleted_comment',$message);
        return redirect(route('comments.index'));
    }
    public function approve(Request $request){
        $comment = Comment::findOrFail($request->id);
        $comment->status == 0 ? $status = 1: $status = 0;
        $comment->status = $status;
        $comment->save();
//        if ($status==1){
//            return 'رد دیدگاه';
//        }else{
//            return 'پذیرفتن';
//        }
        return redirect(route('comments.index'));
    }
}
