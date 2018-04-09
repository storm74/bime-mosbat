<?php

namespace App\Http\Controllers;

use App\carsCategory;
use App\Comment;
use App\CommentReply;
use App\personal_car_list;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function blog_home(){
        $posts = Post::all()->sortByDesc('updated_at');
//        return "yees its work. yo are in blog home page";
        return view('front.blog-home-page',['posts'=>$posts]);
//        return dd($posts);
    }
    public function blog_single($slug){
        $post = Post::all()->where('slug','==',$slug)->first();
//        return "yees its work. yo are in blog home page";
        return view('front.blog-post-page',['post'=>$post]);
    }
    public function home_post_section(){
        $posts = Post::all()->sortByDesc('updated_at');
        $carFamily = carsCategory::all()->sortByDesc('updated_at');
        return view('homepage',['posts'=>$posts,'carFamily'=>$carFamily]);
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


    public function commentReplyStore(Request $request){

        if (Auth::check()){
            $user = Auth::user();
            if ($user->isAdmin()){
                $status=1;
                $result = "<p class='alert alert-success'>پاسخ شما با موفقیت ثبت گردید.</p>";
            }else{
                $stats=0;
                $result = "<p class='alert alert-success'>پاسخ شما با موفقیت ثبت گردید و بعد از تایید مدیریت نمایش داده خواهد شد.</p>";
            }
            $data = [
                'comment_id'=>$request->comment_id,
                'author'=>$user->name,
                'email'=>$user->email,
                'text'=>$request->text,
                'status'=>$status
            ];
            $commentReply = CommentReply::create($data);
            echo $result;
        }else{
            $input = $request->all();
            $input['status']=0;
//        return $input;
            $commentReply = CommentReply::create($input);
            $result = "<p class='alert alert-success'>پاسخ شما با موفقیت ثبت گردید و بعد از تایید مدیریت نمایش داده خواهد شد.</p>";
            echo $result;
        }
           }

}
