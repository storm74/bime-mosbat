<?php

namespace App\Http\Controllers;

use App\Meta;
use Illuminate\Http\Request;

class AdminGeneralController extends Controller
{
    public function setting(Request $request){
        $input =  $request->all();
        $n = Meta::all()->count();
        if($n==0){
            $meta = Meta::create($input);
        }else{
            $meta = Meta::findOrFail(1)->update($input);
        }
        return "<div class='result-anim'><i class=\"fa fa-reply fa-fw orange\"></i> تنظیمات با موفقیت به روزرسانی گردید </div>";
    }
}
