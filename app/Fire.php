<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fire extends Model
{
    public function insurance(){
        return $this->belongsTo('App\Insurance');
    }
}
