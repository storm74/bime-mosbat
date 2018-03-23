<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    protected $fillable = [
        'comment_id',
        'email',
        'author',
        'text'
    ];
    public function comment(){
        return $this->belongsTo('App\Comment');
    }
}