<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function blog_home(){
        $posts = Post::all()->sortByDesc('updated_at');
//        return "yees its work. yo are in blog home page";
        return view('front.blog-home-page',['posts'=>$posts]);
    }
    public function blog_single($title,$id){
        $post = Post::findOrFail($id);
//        return "yees its work. yo are in blog home page";
        return view('front.blog-post-page',['post'=>$post]);
    }
    public function home_post_section(){
        $posts = Post::all()->sortByDesc('updated_at');
        return view('homepage',['posts'=>$posts]);
    }
    public function commentStore(Request $request){

        if (Auth::check()){
            $user = Auth::user();
            if ($user->isAdmin()){
                $status=1;
                $result = "<p class='alert alert-success'>دیدگاه شما با موفقیت ثبت گردید.</p>";
            }else{
                $stats=0;
                $result = "<p class='alert alert-success'>دیدگاه شما با موفقیت ثبت گردید و بعد از تایید مدیریت نمایش داده خواهد شد.</p>";
            }
            $data = [
                'post_id'=>$request->post_id,
                'author'=>$user->name,
                'email'=>$user->email,
                'text'=>$request->text,
                'status'=>$status
            ];
            $comment = Comment::create($data);
            echo $result;
        }else{
            $input = $request->all();
            $input['status']=0;
//        return $input;
            $comment = Comment::create($input);
            $result = "<p class='alert alert-success'>دیدگاه شما با موفقیت ثبت گردید و بعد از تایید مدیریت نمایش داده خواهد شد.</p>";
            echo $result;
        }
           }

}
