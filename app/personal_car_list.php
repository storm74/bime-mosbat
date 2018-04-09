<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal_car_list extends Model
{
    protected $fillable=[
        'car_category_id',
        'name',
        'ofs',
        'gfs',
        'pps',
        'lfs'
    ];
    public function carFamily(){
        return $this->belongsTo('App\carsCategory','car_category_id','id');
    }
}
