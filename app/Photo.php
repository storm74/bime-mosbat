<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $fillable=['path'];
	protected $profile_uploads ='admin_assets/images/profiles/';
	protected $post_uploads ='admin_assets/images/posts/';
	protected $noImage = 'تصویری موجود نیست';
	public function user_image(){
		$name = $this->path;
		return $this->profile_uploads.$name;

	}
	public function post_image(){
		$name = $this->path;
		return $this->post_uploads.$name;

	}
	public function post(){
		return $this->hasOne('App\Post');
	}
}

