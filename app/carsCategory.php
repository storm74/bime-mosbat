<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carsCategory extends Model
{
    protected $fillable = [
        'family'
    ];
    public function models(){
        return $this->hasMany('App\personal_car_list','car_category_id','id');
    }
}
