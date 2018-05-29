<?php

namespace App\Http\Controllers;

use App\Badane;
use App\carsCategory;
use App\Fire;
use App\Insurance;
use App\Meta;
use App\personal_car_list;
use App\ThirdPartyInsurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Morilog\Jalali\jDate;
use Morilog\Jalali\jDateTime;

class FrontInsuranceController extends Controller
{
    public function fireInsuranceResultPage(Request $request){
        $pushesh = [
            'zaminlarze'=>$request->zaminlarze == 1 ? 1:0,
            'tl'=>$request->tl == 1 ? 1:0,
            'nz'=>$request->nz == 1 ? 1:0,
            'shl5'=>$request->shl5 == 1 ? 1:0,
            'shm5'=>$request->shm5 == 1 ? 1:0,
            'storm'=>$request->storm == 1 ? 1:0,
            'flood'=>$request->flood == 1 ? 1:0,
            's_va_sh'=>$request->s_va_sh == 1 ? 1:0,
            'rain'=>$request->rain == 1 ? 1:0,
        ];
        $data = [
            'saze'=>$request->saze,
            'metr'=> $request->metr,
            'lavazem'=>$request->lavazem,
            'metr_sakht_hazine'=>$request->metr_sakht_hazine
        ];
        $capital = ($data['metr'] * $data['metr_sakht_hazine'])+$data['lavazem'];
        $fires = Fire::all()->toArray();
        $n = count($fires);
        for ($i = 0; $i < $n; $i++){
//            $insurance_image = Insurance::findOrFail($fires[$i]['insurance_id'])->photo->insurance_image();
//            $insurance[$i] = Insurance::findOrFail($fires[$i]['insurance_id']);
            $insurance_data[$i] =[
                'insurance_id'=>$fires[$i]['insurance_id'],
                'base'=>$fires[$i]['base'],
                'eb'=>$fires[$i]['eb'],
                'ef'=>$fires[$i]['ef'],
                'tl'=>$fires[$i]['tl'],
                'nz'=>$fires[$i]['nz'],
                'shm5'=>$fires[$i]['shm5'],
                'shl5'=>$fires[$i]['shl5'],
                'storm'=>$fires[$i]['storm'],
                'flood'=>$fires[$i]['flood'],
                's_va_sh'=>$fires[$i]['s_va_sh'],
                'rain'=>$fires[$i]['rain'],
                's_va_sh'=>$fires[$i]['s_va_sh'],
            ];
        }//insurance data creator
//        create all coafitions
        for ($i = 0; $i < $n; $i++) {
            $zaminlarze = $pushesh['zaminlarze'] * $insurance_data[$i][$data['saze']];
            $tl = $pushesh['tl'] * $insurance_data[$i]['tl'];
            $nz = $pushesh['nz'] * $insurance_data[$i]['nz'];
            $shl5 = $pushesh['shl5'] * $insurance_data[$i]['shl5'];
            $shm5 = $pushesh['shm5'] * $insurance_data[$i]['shm5'];
            $storm = $pushesh['storm'] * $insurance_data[$i]['storm'];
            $flood = $pushesh['flood'] * $insurance_data[$i]['flood'];
            $s_va_sh = $pushesh['s_va_sh'] * $insurance_data[$i]['s_va_sh'];
            $rain = $pushesh['rain'] * $insurance_data[$i]['rain'];
            $fire_insrance_factor[$i] = [
                'factor'=> $insurance_data[$i]['base']
                    + $zaminlarze
                    + $tl
                    + $nz
                    + $shl5
                    + $shm5
                    + $storm
                    + $flood
                    + $s_va_sh
                    + $rain ,
                'insurance_id' => $insurance_data[$i]['insurance_id'],
//                'insurance_image' => $insurance_data[$i]['insurance_image'],
            ];
        }
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $meta = Meta::all()->first();
//        create all coafitions
//        return $fire_insrance_factor;
        return view('front.fire-insurance-result-from-home',['fire_insrance_factor'=>$fire_insrance_factor,'capital'=>$capital,'n'=>$n,'data'=>$data,'menu_array'=>$menu_array,'meta'=>$meta]);
    }
    public function fireInsuranceResultAjax(Request $request){
        $pushesh = [
            'zaminlarze'=>$request->zaminlarze == 1 ? 1:0,
            'tl'=>$request->tl == 1 ? 1:0,
            'nz'=>$request->nz == 1 ? 1:0,
            'shl5'=>$request->shl5 == 1 ? 1:0,
            'shm5'=>$request->shm5 == 1 ? 1:0,
            'storm'=>$request->storm == 1 ? 1:0,
            'flood'=>$request->flood == 1 ? 1:0,
            's_va_sh'=>$request->s_va_sh == 1 ? 1:0,
            'rain'=>$request->rain == 1 ? 1:0,
        ];
        $data = [
            'saze'=>$request->saze,
            'metr'=> $request->metr,
            'lavazem'=>$request->lavazem,
            'metr_sakht_hazine'=>$request->metr_sakht_hazine
        ];
        $capital = ($data['metr'] * $data['metr_sakht_hazine'])+$data['lavazem'];
        $fires = Fire::all()->toArray();
        $n = count($fires);
        for ($i = 0; $i < $n; $i++){
//            $insurance_image = Insurance::findOrFail($fires[$i]['insurance_id'])->photo->insurance_image();
//            $insurance[$i] = Insurance::findOrFail($fires[$i]['insurance_id']);
            $insurance_data[$i] =[
                    'insurance_id'=>$fires[$i]['insurance_id'],
                    'base'=>$fires[$i]['base'],
                    'eb'=>$fires[$i]['eb'],
                    'ef'=>$fires[$i]['ef'],
                    'tl'=>$fires[$i]['tl'],
                    'nz'=>$fires[$i]['nz'],
                    'shm5'=>$fires[$i]['shm5'],
                    'shl5'=>$fires[$i]['shl5'],
                    'storm'=>$fires[$i]['storm'],
                    'flood'=>$fires[$i]['flood'],
                    's_va_sh'=>$fires[$i]['s_va_sh'],
                    'rain'=>$fires[$i]['rain'],
                    's_va_sh'=>$fires[$i]['s_va_sh'],
            ];
        }//insurance data creator
//        create all coafitions
        for ($i = 0; $i < $n; $i++) {
            $zaminlarze = $pushesh['zaminlarze'] * $insurance_data[$i][$data['saze']];
            $tl = $pushesh['tl'] * $insurance_data[$i]['tl'];
            $nz = $pushesh['nz'] * $insurance_data[$i]['nz'];
            $shl5 = $pushesh['shl5'] * $insurance_data[$i]['shl5'];
            $shm5 = $pushesh['shm5'] * $insurance_data[$i]['shm5'];
            $storm = $pushesh['storm'] * $insurance_data[$i]['storm'];
            $flood = $pushesh['flood'] * $insurance_data[$i]['flood'];
            $s_va_sh = $pushesh['s_va_sh'] * $insurance_data[$i]['s_va_sh'];
            $rain = $pushesh['rain'] * $insurance_data[$i]['rain'];
            $fire_insrance_factor[$i] = [
                'factor'=> $insurance_data[$i]['base']
                + $zaminlarze
                + $tl
                + $nz
                + $shl5
                + $shm5
                + $storm
                + $flood
                + $s_va_sh
                + $rain ,
                'insurance_id' => $insurance_data[$i]['insurance_id'],
//                'insurance_image' => $insurance_data[$i]['insurance_image'],
            ];
        }
//        create all coafitions
//        return $fire_insrance_factor;
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $meta = Meta::all()->first();
        return view('includes.fire-single-body',['fire_insrance_factor'=>$fire_insrance_factor,'capital'=>$capital,'n'=>$n,'menu_array'=>$menu_array,'meta'=>$meta]);
    }
    public function thirdpartyInsuranceFromHome(Request $request){
        $carFamily = carsCategory::all()->sortByDesc('updated_at');
        $car = personal_car_list::findOrFail($request->modelId);
        switch (1) {
            case $car->gfs:
                $base = 'g4s';
        break;
            case $car->pps:
                $base = 'pps';
        break;
            case $car->lfs:
                $base = 'l4s';
        break;
            case $car->ofs:
                $base ='o4s';
                break;
            default:
                $base="تعریف نشده";
        }
        $now_time = date("Y/m/d");
        $now = jDate::forge($now_time)->format('%Y');
        $yearProduct = $now - $request->productYear;
        if ($yearProduct>=15 && $yearProduct<=20){
                $year_15 =($yearProduct -15)*2;
        }else{
            $year_15 =0;
        }
        if ($yearProduct>=20){
            $year_20 =($yearProduct -20)*10;
        }else{
            $year_20 =0;
        }
        $factors=[
            'year'=>$yearProduct,
            'off'=>$request->off
        ];
        $year_sakht = [
            '15'=>$year_15,
            '20'=>$year_20,
        ];
        $off_percents=[
            '0'=> 0,
            '1'=> 5,
            '2'=> 10,
            '3'=> 15,
            '4'=> 20,
            '5'=> 25,
            '6'=> 30,
            '7'=> 35,
            '8'=> 40,
            '9'=> 45,
            '10'=> 50,
            '11'=> 55,
            '12'=> 60,
            '13'=> 65,
            '14'=> 70
        ];
        $darsad = (-($off_percents[$factors['off']])/100)+($year_15/100 + $year_20/100)+1;
        $thirdParty = ThirdPartyInsurance::all()->toArray();
        $n = count($thirdParty);
        for ($i = 0; $i < $n; $i++){
            $base_price_factor[$i] = [
                    'id'=>$thirdParty[$i]['id'],
                    'base'=>$thirdParty[$i][$base]
//                    '15'=> $thirdParty[$i]['sakhtm_15'],
//                    '20'=> $thirdParty[$i]['sakhtm_20'],
//                    't_in'=> $thirdParty[$i]['t_in'],
//                    't_out'=> $thirdParty[$i]['t_out'],
//                    'edu'=> $thirdParty[$i]['edu'],
            ];
        }
        $data = [
            'family_id'=>$request->familyId,
            'family'=>carsCategory::findOrFail($request->familyId)->family,
            'model'=>personal_car_list::findOrFail($request->modelId)->name,
            'model_id'=>$request->modelId,
            'productYear'=>$request->productYear,
            'off'=>$request->off
        ];
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $meta = Meta::all()->first();
        return view('front.third-insurance-result-from-home',['carFamily'=>$carFamily,'base_price_factor'=>$base_price_factor,'darsad'=>$darsad,'n'=>$n,'data'=>$data,'menu_array'=>$menu_array,'meta'=>$meta]);
//        return $base_price_factor[0][0];
    }
    public function thirdpartyInsuranceAjax(Request $request){
        $carFamily = carsCategory::all()->sortByDesc('updated_at');
        $car = personal_car_list::findOrFail($request->modelId);
        switch (1) {
            case $car->gfs:
                $base = 'g4s';
        break;
            case $car->pps:
                $base = 'pps';
        break;
            case $car->lfs:
                $base = 'l4s';
        break;
            case $car->ofs:
                $base ='o4s';
                break;
            default:
                $base="تعریف نشده";
        }
        $now_time = date("Y/m/d");
        $now = jDate::forge($now_time)->format('%Y');
        $yearProduct = $now - $request->productYear;
        if ($yearProduct>=15 && $yearProduct<=20){
                $year_15 =($yearProduct -15)*2;
        }else{
            $year_15 =0;
        }
        if ($yearProduct>=20){
            $year_20 =($yearProduct -20)*10;
        }else{
            $year_20 =0;
        }
        $factors=[
            'year'=>$yearProduct,
            'off'=>$request->off
        ];
        $year_sakht = [
            '15'=>$year_15,
            '20'=>$year_20,
        ];
        $off_percents=[
            '0'=> 0,
            '1'=> 5,
            '2'=> 10,
            '3'=> 15,
            '4'=> 20,
            '5'=> 25,
            '6'=> 30,
            '7'=> 35,
            '8'=> 40,
            '9'=> 45,
            '10'=> 50,
            '11'=> 55,
            '12'=> 60,
            '13'=> 65,
            '14'=> 70
        ];
        $darsad = (-($off_percents[$factors['off']])/100)+($year_15/100 + $year_20/100)+1;
        $thirdParty = ThirdPartyInsurance::all()->toArray();
        $n = count($thirdParty);
        for ($i = 0; $i < $n; $i++){
            $app_detect = $request->carApplication == 'personal' ? 0 : $thirdParty[$i][$request->carApplication];
//            $application = $thirdParty[$i][$app_detect];
            $base_price_factor[$i] = [
                    'id'=>$thirdParty[$i]['id'],
                    'base'=>$thirdParty[$i][$base],
                    'application'=> $app_detect
//                    '15'=> $thirdParty[$i]['sakhtm_15'],
//                    '20'=> $thirdParty[$i]['sakhtm_20'],
//                    't_in'=> $thirdParty[$i]['t_in'],
//                    't_out'=> $thirdParty[$i]['t_out'],
//                    'edu'=> $thirdParty[$i]['edu'],
            ];
        }
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $meta = Meta::all()->first();
        return view('includes.third-single-body',['carFamily'=>$carFamily,'base_price_factor'=>$base_price_factor,'darsad'=>$darsad,'n'=>$n,'menu_array'=>$menu_array,'meta'=>$meta]);
//        return $base_price_factor[0][0];
    }

    public function badaneInsuranceResultPage(Request $request){
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $meta = Meta::all()->first();
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $carFamily = carsCategory::all()->sortByDesc('updated_at');
        $data =[
            'family_id'=>$request->familyIdBadane,
            'family'=>carsCategory::findOrFail($request->familyIdBadane)->family,
            'model'=>personal_car_list::findOrFail($request->modelIdBadane)->name,
            'model_id'=>$request->modelIdBadane,
            //data lazem
            'familyId'=>$request->familyIdBadane,
            'modelId'=>$request->modelIdBadane,
            'productYear'=>$request->productYearBadane,
            'value'=>$request->value,
        ];
        //calculate deduction
        $deduct100 = $data['value']-100000000;
        if ($deduct100 > 0){
            $deduct =[
                'l20' => 20000000,
                'm20'=>30000000,
                'm50'=>30000000,
                'm100'=>$deduct100
            ];
        }else{
            $deduct50 = $data['value']-50000000;
            if ($deduct50>0){
                $deduct =[
                    'l20' => 20000000,
                    'm20'=>30000000,
                    'm50'=>$deduct50,
                    'm100'=>0
                ];
            }else{
                $deduct20 = $data['value']-20000000;
                if ($deduct20>0){
                    $deduct =[
                        'l20' => 20000000,
                        'm20'=>$deduct20,
                        'm50'=>0,
                        'm100'=>0
                    ];
                }else{
                    $deduct =[
                        'l20' => $data['value'],
                        'm20'=>0,
                        'm50'=>0,
                        'm100'=>0
                    ];
                }//deduct20
            }//deduct50
        }//deduct100
        //year calculation
        $now = now();
        $now_time = jDate::forge($now)->format('%Y');
        $year_producted = $now_time - $data['productYear'];
        $year_deduct10 =  $year_producted - 10;
        if ($year_deduct10 >0){
            $year_deduct = [
                'l5'=>5,
                '510'=>5,
                'm10'=>$year_deduct10,
            ];
        }else{
            $year_deduct5 =  $year_producted - 5;
            if ($year_deduct5 >0){
                $year_deduct = [
                    'l5'=>5,
                    '510'=>$year_deduct5,
                    'm10'=>0,
                ];
            }else{
                $year_deduct = [
                    'l5'=>5,
                    '510'=>$year_deduct5,
                    'm10'=>0,
                ];
            }
        }
        $badanes = Badane::all();
        $insurances = Insurance::all();
        $car = personal_car_list::findOrFail($data['modelId']);
        $car->gfs==1 ? $silandr = "gfs" : $silandr = "lfs";
        $n = count($badanes);
        for ($i=0;$i<count($badanes);$i++){
            $insurance_id[$i]=$badanes[$i]['insurance_id'];
            $year_product_percent[$i] =[
                'l5'=>($badanes[$i]['yearl_5']/100)*$year_deduct['l5'],
                '510'=>($badanes[$i]['year_510']/100)*$year_deduct['510'],
                'm10'=>($badanes[$i]['yearm_10']/100)*$year_deduct['m10']
            ];
            $year_product_percent_one[$i]=$year_product_percent[$i]['l5']+
                $year_product_percent[$i]['510']+
                $year_product_percent[$i]['m10'];
            $base[$i]=[
                "l20"=>$badanes[$i][$silandr."l_20"]/100,
                "m20"=>$badanes[$i][$silandr."m_20"]/100,
                "m50"=>$badanes[$i][$silandr."m_50"]/100,
                "m100"=>$badanes[$i][$silandr."m_100"]/100,
            ];//base tarefe
            $base_p_production[$i]=[
                "l20"=>$base[$i]['l20'] + $year_product_percent_one[$i]*$base[$i]['l20'],
                "m20"=>$base[$i]['m20'] + $year_product_percent_one[$i]*$base[$i]['m20'],
                "m50"=>$base[$i]['m50'] + $year_product_percent_one[$i]*$base[$i]['m50'],
                "m100"=>$base[$i]['m100'] + $year_product_percent_one[$i]*$base[$i]['m100']
            ];//base tarefe
            $natije[$i] =
                $base_p_production[$i]['l20']*$deduct['l20']+
                $base_p_production[$i]['m20']*$deduct['m20']+
                $base_p_production[$i]['m50']*$deduct['m50']+
                $base_p_production[$i]['m100']*$deduct['m100']
            ;

        }//data extracted from badane records
//        return $data['productYear'];
//        return $data;
//        return $natije;
        return view('front.badane-insurance-result-from-home',['natije'=>$natije,'insurance_id'=>$insurance_id,'carFamily'=>$carFamily,'n'=>$n,'data'=>$data,'menu_array'=>$menu_array,'meta'=>$meta]);

    }
    public function badaneInsuranceResultAjax(Request $request){
        $carFamily = carsCategory::all()->sortByDesc('updated_at');
        $data =[
            'family_id'=>$request->familyIdBadane,
            'family'=>carsCategory::findOrFail($request->familyIdBadane)->family,
            'model'=>personal_car_list::findOrFail($request->modelIdBadane)->name,
            'model_id'=>$request->modelIdBadane,
            //data lazem
            'familyId'=>$request->familyIdBadane,
            'modelId'=>$request->modelIdBadane,
            'productYear'=>$request->productYearBadane,
            'value'=>$request->value,
        ];
        //calculate deduction
        $deduct100 = $data['value']-100000000;
        if ($deduct100 > 0){
            $deduct =[
                'l20' => 20000000,
                'm20'=>30000000,
                'm50'=>30000000,
                'm100'=>$deduct100
            ];
        }else{
            $deduct50 = $data['value']-50000000;
            if ($deduct50>0){
                $deduct =[
                    'l20' => 20000000,
                    'm20'=>30000000,
                    'm50'=>$deduct50,
                    'm100'=>0
                ];
            }else{
                $deduct20 = $data['value']-20000000;
                if ($deduct20>0){
                    $deduct =[
                        'l20' => 20000000,
                        'm20'=>$deduct20,
                        'm50'=>0,
                        'm100'=>0
                    ];
                }else{
                    $deduct =[
                        'l20' => $data['value'],
                        'm20'=>0,
                        'm50'=>0,
                        'm100'=>0
                    ];
                }//deduct20
            }//deduct50
        }//deduct100
        //year calculation
        $now = now();
        $now_time = jDate::forge($now)->format('%Y');
        $year_producted = $now_time - $data['productYear'];
        $year_deduct10 =  $year_producted - 10;
        if ($year_deduct10 >0){
            $year_deduct = [
                'l5'=>5,
                '510'=>5,
                'm10'=>$year_deduct10,
            ];
        }else{
            $year_deduct5 =  $year_producted - 5;
            if ($year_deduct5 >0){
                $year_deduct = [
                    'l5'=>5,
                    '510'=>$year_deduct5,
                    'm10'=>0,
                ];
            }else{
                $year_deduct = [
                    'l5'=>5,
                    '510'=>$year_deduct5,
                    'm10'=>0,
                ];
            }
        }
        $badanes = Badane::all();
        $insurances = Insurance::all();
        $car = personal_car_list::findOrFail($data['modelId']);
        $car->gfs==1 ? $silandr = "gfs" : $silandr = "lfs";
        $n = count($badanes);
        for ($i=0;$i<count($badanes);$i++){
            $insurance_id[$i]=$badanes[$i]['insurance_id'];
            $year_product_percent[$i] =[
                'l5'=>($badanes[$i]['yearl_5']/100)*$year_deduct['l5'],
                '510'=>($badanes[$i]['year_510']/100)*$year_deduct['510'],
                'm10'=>($badanes[$i]['yearm_10']/100)*$year_deduct['m10']
            ];
            $year_product_percent_one[$i]=$year_product_percent[$i]['l5']+
                $year_product_percent[$i]['510']+
                $year_product_percent[$i]['m10'];
            $base[$i]=[
                "l20"=>$badanes[$i][$silandr."l_20"]/100,
                "m20"=>$badanes[$i][$silandr."m_20"]/100,
                "m50"=>$badanes[$i][$silandr."m_50"]/100,
                "m100"=>$badanes[$i][$silandr."m_100"]/100,
            ];//base tarefe
            $base_p_production[$i]=[
                "l20"=>$base[$i]['l20'] + $year_product_percent_one[$i]*$base[$i]['l20'],
                "m20"=>$base[$i]['m20'] + $year_product_percent_one[$i]*$base[$i]['m20'],
                "m50"=>$base[$i]['m50'] + $year_product_percent_one[$i]*$base[$i]['m50'],
                "m100"=>$base[$i]['m100'] + $year_product_percent_one[$i]*$base[$i]['m100']
            ];//base tarefe
            $natije[$i] =
                $base_p_production[$i]['l20']*$deduct['l20']+
                $base_p_production[$i]['m20']*$deduct['m20']+
                $base_p_production[$i]['m50']*$deduct['m50']+
                $base_p_production[$i]['m100']*$deduct['m100']
            ;

        }//data extracted from badane records
//        return $data['productYear'];
//        return $data;
//        return $natije;
        $places = \App\Menu::all();
        foreach ($places as $place){
            $menu_array[$place->id] =$place->menu_id;
        }
        $meta = Meta::all()->first();
        return view('includes.badane-single-body',['natije'=>$natije,'insurance_id'=>$insurance_id,'carFamily'=>$carFamily,'n'=>$n,'data'=>$data,'menu_array'=>$menu_array,'meta'=>$meta]);

    }
//    public function badaneInsuranceResultAjax(Request $request){
//        $input = $request->all();
//        return $input;
////        return "yes its work very well";
//    }

    public function personalCarListExtract($id){
        $family = carsCategory::findOrFail($id);
        $models = $family->models;
        foreach ($models as $model){
            echo "<a model_id=\" $model->id \" data=\" $model->name \" onclick=\"carModelSet('car-noa-third-party',this.getAttribute('data'),this.getAttribute('model_id'))\" >$model->name</a>";
        }
    }
    public function personalCarListExtractBadane($id){
        $family = carsCategory::findOrFail($id);
        $models = $family->models;
        foreach ($models as $model){
            echo "<a model_id=\" $model->id \" data=\" $model->name \" onclick=\"carModelSetBadane('car-noa-badane',this.getAttribute('data'),this.getAttribute('model_id'))\" >$model->name</a>";
        }
    }
}
