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
	public function fire(){
	    return $this->hasOne('App\Fire');
    }
    public function badane(){
        return $this->hasOne('App\Badane');
    }
    public function thirdParty(){
	    return $this->belongsTo('App\ThirdPartyInsurance','third_party_insurance_id','id');
    }

}
