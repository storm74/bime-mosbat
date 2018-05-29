<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    public function posts() {
	    return $this->hasMany( 'App\Post' )->orderByDesc('updated_at');
    }
    public function list_array(){
			$all= $this->all();
	    $list= array();
	    foreach ($all as $item){
		    $list= array_add($list, $item->id, $item->name);
			}
			return $list;
    }
}