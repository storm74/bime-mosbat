<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'user_id',
	    'category_id',
	    'photo_id',
	    'title',
	    'content',
	    'discription',
        'status'
    	];
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function photo(){
    	return $this->belongsTo('App\Photo');
    }
	public function category(){
		return $this->belongsTo('App\Category')->orderByDesc('created_at');
	}
	public function postComments(){
        return $this->hasMany('App\Comment')->orderByDesc('created_at');
    }
}
