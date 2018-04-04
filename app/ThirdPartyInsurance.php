<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThirdPartyInsurance extends Model
{
    protected $fillable = [
        'lfs',
        'g4s',
        'o4s',
        'pps',
        'bl_1',
        // burden lover than 1 ton
        'b_13',
        //burden between 1 and 3 ton
        'b_510',
        //burden between 5 and 10 ton
        'b_1020',
        //burden between 10 and 20 ton
        'b_m20',
        //burden between more than 20 ton
        'b_enf',
        //burden with danger of enfejar
        'b_s_g',
        //burden with fuel and gas
        'edu',
        //educational use of car
        't_out',
        //taxi that works out of city
        't_in',
        //taxi that works in city
        'sakhtm_15',
        //car assembled morthan 15 years ago
        'sakhtm_20',
        //car assembled morthan 20 years ago
        'tr_7',
        // transaction cars with the capacity of 7 people with driver
        'tr_9',
        // transaction cars with the capacity of 7 people with driver
        'tr_10',
        // transaction cars with the capacity of 7 people with driver
    ];
}
