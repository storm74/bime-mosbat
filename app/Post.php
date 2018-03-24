<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

 class Post extends Model
{
    use Sluggable;

     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
     public function sluggable()
     {
         return [
             'slug' => [
                 'source' => 'title',
                 'onUpdate'=> true
             ]
         ];
     }
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
    public function postOrdered(){
    	return $this->orderByDesc('updated_at');
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
