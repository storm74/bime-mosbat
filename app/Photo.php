<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $fillable=['path'];
	protected $uploads ='admin_assets/images/profiles/';
	protected $noImage = 'تصویری موجود نیست';
	public function getPathAttribute($photo){

		return $this->uploads.$photo;

	}
}

