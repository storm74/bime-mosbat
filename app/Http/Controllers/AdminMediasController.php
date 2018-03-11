<?php

namespace App\Http\Controllers;

use App\Insurance;
use App\Photo;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class AdminMediasController extends Controller
{
    public function index(){
    	$posts = Post::all();
    	$photos = Photo::all();
    	$users = User::all();
    	$insurances = Insurance::all();
    	return view('admin.media.index',['posts'=>$posts, 'insurances'=>$insurances, 'photos'=>$photos]);
    }
    public function upload(){
        return view('admin.media.create');
    }
}
