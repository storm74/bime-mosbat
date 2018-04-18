<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fire extends Model
{
    protected $fillable =[
        'base',
        'ef',
        'eb',
        'nz',
        'shm5',
        'shl5',
        'tl',
        'storm',
        'flood',
        's_va_sh',
        'rain',
    ];
    public function insurance(){
        return $this->belongsTo('App\Insurance');
    }
}
