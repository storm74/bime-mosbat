<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminInsuranseController extends Controller
{
    public function personalCars(){
        return view('admin.car-list.personal-car-list');
    }
    public function transportCars(){}
    public function burdenCars(){}
}
