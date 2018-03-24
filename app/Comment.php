<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'email',
        'author',
        'status',
        'text'
    ];
    public function post(){
        return $this->belongsTo('App\Post');
    }
    public function replies(){
        return $this->hasMany('App\CommentReply')->orderByDesc('created_at');
    }
    public function getGravatarAttribute(){
        $hash = md5(strtolower(trim($this->attributes['email'])))."?d=mm";
        return "http://www.gravatar.com/avatar/$hash";
    }
}
