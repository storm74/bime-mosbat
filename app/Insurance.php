<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable=[
    	'third_party_insurance_id',
	    'name',
	    'satisfaction',
	    'time_to_ok',
	    'branches',
	    'photo_id'
    ];
	public function photo(){
		return $this->belongsTo('App\Photo');
	}
	public function user(){
		return $this->belongsTo('App\User');
	}

}
