<?php

namespace App\Http\Controllers;

use App\carsCategory;
use App\Category;
use App\Comment;
use App\CommentReply;
use App\Meta;
use App\personal_car_list;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function blog_home(){
        $posts = Post::all()->sortByDesc('updated_at');
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $meta = Meta::all()->first();
        $categories = Category::all()->sortByDesc('updated_at');
//        return "yees its work. yo are in blog home page";
        return view('front.blog-home-page',['posts'=>$posts,'categories'=>$categories,'menu_array'=>$menu_array,'meta'=>$meta]);
//        return dd($posts);
    }
    public function blog_category($id){
        $posts = Post::all()->sortByDesc('updated_at');
        $category = Category::findOrFail($id);
        $category_name = $category->name;
        $posts_category = $category->posts;
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $meta = Meta::all()->first();
        $categories = Category::all()->sortByDesc('updated_at');
//        return "yees its work. yo are in blog home page";
        return view('front.blog-category-page',['posts_category'=>$posts_category,'category_name'=>$category_name,'posts'=>$posts,'categories'=>$categories,'menu_array'=>$menu_array,'meta'=>$meta]);
//        return dd($posts);
    }
    public function blog_single($slug){
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $meta = Meta::all()->first();
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $categories = Category::all()->sortByDesc('updated_at');
        $post = Post::all()->where('slug','==',$slug)->first();
        $posts = Post::all()->sortByDesc('updated_at');
//        return "yees its work. yo are in blog home page";
        return view('front.blog-post-page',['posts'=>$posts,'post'=>$post,'categories'=>$categories,'menu_array'=>$menu_array,'meta'=>$meta]);
    }

    public function home_post_section(){
        $posts = Post::all()->sortByDesc('updated_at');
        $carFamily = carsCategory::all()->sortByDesc('updated_at');
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $meta = Meta::all()->first();
        return view('homepage',['posts'=>$posts,'carFamily'=>$carFamily,'menu_array'=>$menu_array,'meta'=>$meta]);
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
