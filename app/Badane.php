<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badane extends Model
{
    protected $fillable =[
        'lfsl_20',
        'lfsm_20',
        'lfsm_50',
        'lfsm_100',
        'gfsl_20',
        'gfsm_20',
        'gfsm_50',
        'gfsm_100',
        'taxi_keraye',
        'edu_azhans_khaty',
        'off_1',
        'off_2',
        'off_3',
        'off_4',
        'off_5',
        'off_6',
        'off_7',
        'off_m_7',
        'yearl_5',
        'yearl_510',
        'yearm_10',
        'asid',
        'shishe',
        'seil_va_zelzele',
        'serghat_dar_ja',
        'p_navasanat',
        'ayyab_zahab',
        'varedat',
        'hesab_boland_moddat',
        'life_insurance',
        'new',

    ];
    public function insurance(){
        return $this->belongsTo('App\Insurance');
    }
}
