<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

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
//        return "yees its work. yo are in blog home page";
        return view('homepage',['posts'=>$posts]);
    }
}
