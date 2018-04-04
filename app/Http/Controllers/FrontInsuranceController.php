<?php

namespace App\Http\Controllers;

use App\Fire;
use App\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
//        create all coafitions
//        return $fire_insrance_factor;
        return view('front.fire-insurance-result-from-home',['fire_insrance_factor'=>$fire_insrance_factor,'capital'=>$capital,'n'=>$n,'data'=>$data]);
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
        return view('includes.fire-single-body',['fire_insrance_factor'=>$fire_insrance_factor,'capital'=>$capital,'n'=>$n]);
    }
    public function thirdInsuranceResultAjax(Request $request){
//        $pushesh = [
//            'zaminlarze'=>$request->zaminlarze == 1 ? 1:0,
//            'tl'=>$request->tl == 1 ? 1:0,
//            'nz'=>$request->nz == 1 ? 1:0,
//            'shl5'=>$request->shl5 == 1 ? 1:0,
//            'shm5'=>$request->shm5 == 1 ? 1:0,
//            'storm'=>$request->storm == 1 ? 1:0,
//            'flood'=>$request->flood == 1 ? 1:0,
//            's_va_sh'=>$request->s_va_sh == 1 ? 1:0,
//            'rain'=>$request->rain == 1 ? 1:0,
//        ];
//        $data = [
//            'saze'=>$request->saze,
//            'metr'=> $request->metr,
//            'lavazem'=>$request->lavazem,
//            'metr_sakht_hazine'=>$request->metr_sakht_hazine
//        ];
//        $capital = ($data['metr'] * $data['metr_sakht_hazine'])+$data['lavazem'];
//        $fires = Fire::all()->toArray();
//        $n = count($fires);
//        for ($i = 0; $i < $n; $i++){
////            $insurance_image = Insurance::findOrFail($fires[$i]['insurance_id'])->photo->insurance_image();
////            $insurance[$i] = Insurance::findOrFail($fires[$i]['insurance_id']);
//            $insurance_data[$i] =[
//                    'insurance_id'=>$fires[$i]['insurance_id'],
//                    'base'=>$fires[$i]['base'],
//                    'eb'=>$fires[$i]['eb'],
//                    'ef'=>$fires[$i]['ef'],
//                    'tl'=>$fires[$i]['tl'],
//                    'nz'=>$fires[$i]['nz'],
//                    'shm5'=>$fires[$i]['shm5'],
//                    'shl5'=>$fires[$i]['shl5'],
//                    'storm'=>$fires[$i]['storm'],
//                    'flood'=>$fires[$i]['flood'],
//                    's_va_sh'=>$fires[$i]['s_va_sh'],
//                    'rain'=>$fires[$i]['rain'],
//                    's_va_sh'=>$fires[$i]['s_va_sh'],
//            ];
//        }//insurance data creator
//        create all coafitions
//        for ($i = 0; $i < $n; $i++) {
//            $zaminlarze = $pushesh['zaminlarze'] * $insurance_data[$i][$data['saze']];
//            $tl = $pushesh['tl'] * $insurance_data[$i]['tl'];
//            $nz = $pushesh['nz'] * $insurance_data[$i]['nz'];
//            $shl5 = $pushesh['shl5'] * $insurance_data[$i]['shl5'];
//            $shm5 = $pushesh['shm5'] * $insurance_data[$i]['shm5'];
//            $storm = $pushesh['storm'] * $insurance_data[$i]['storm'];
//            $flood = $pushesh['flood'] * $insurance_data[$i]['flood'];
//            $s_va_sh = $pushesh['s_va_sh'] * $insurance_data[$i]['s_va_sh'];
//            $rain = $pushesh['rain'] * $insurance_data[$i]['rain'];
//            $fire_insrance_factor[$i] = [
//                'factor'=> $insurance_data[$i]['base']
//                + $zaminlarze
//                + $tl
//                + $nz
//                + $shl5
//                + $shm5
//                + $storm
//                + $flood
//                + $s_va_sh
//                + $rain ,
//                'insurance_id' => $insurance_data[$i]['insurance_id'],
////                'insurance_image' => $insurance_data[$i]['insurance_image'],
//            ];
//        }
//        create all coafitions
//        return $fire_insrance_factor;
//        return view('includes.fire-single-body',['fire_insrance_factor'=>$fire_insrance_factor,'capital'=>$capital,'n'=>$n]);
        return "yes its work";
    }
    public function thirdInsuranceResult(Request $request){
//        $pushesh = [
//            'zaminlarze'=>$request->zaminlarze == 1 ? 1:0,
//            'tl'=>$request->tl == 1 ? 1:0,
//            'nz'=>$request->nz == 1 ? 1:0,
//            'shl5'=>$request->shl5 == 1 ? 1:0,
//            'shm5'=>$request->shm5 == 1 ? 1:0,
//            'storm'=>$request->storm == 1 ? 1:0,
//            'flood'=>$request->flood == 1 ? 1:0,
//            's_va_sh'=>$request->s_va_sh == 1 ? 1:0,
//            'rain'=>$request->rain == 1 ? 1:0,
//        ];
//        $data = [
//            'saze'=>$request->saze,
//            'metr'=> $request->metr,
//            'lavazem'=>$request->lavazem,
//            'metr_sakht_hazine'=>$request->metr_sakht_hazine
//        ];
//        $capital = ($data['metr'] * $data['metr_sakht_hazine'])+$data['lavazem'];
//        $fires = Fire::all()->toArray();
//        $n = count($fires);
//        for ($i = 0; $i < $n; $i++){
////            $insurance_image = Insurance::findOrFail($fires[$i]['insurance_id'])->photo->insurance_image();
////            $insurance[$i] = Insurance::findOrFail($fires[$i]['insurance_id']);
//            $insurance_data[$i] =[
//                    'insurance_id'=>$fires[$i]['insurance_id'],
//                    'base'=>$fires[$i]['base'],
//                    'eb'=>$fires[$i]['eb'],
//                    'ef'=>$fires[$i]['ef'],
//                    'tl'=>$fires[$i]['tl'],
//                    'nz'=>$fires[$i]['nz'],
//                    'shm5'=>$fires[$i]['shm5'],
//                    'shl5'=>$fires[$i]['shl5'],
//                    'storm'=>$fires[$i]['storm'],
//                    'flood'=>$fires[$i]['flood'],
//                    's_va_sh'=>$fires[$i]['s_va_sh'],
//                    'rain'=>$fires[$i]['rain'],
//                    's_va_sh'=>$fires[$i]['s_va_sh'],
//            ];
//        }//insurance data creator
//        create all coafitions
//        for ($i = 0; $i < $n; $i++) {
//            $zaminlarze = $pushesh['zaminlarze'] * $insurance_data[$i][$data['saze']];
//            $tl = $pushesh['tl'] * $insurance_data[$i]['tl'];
//            $nz = $pushesh['nz'] * $insurance_data[$i]['nz'];
//            $shl5 = $pushesh['shl5'] * $insurance_data[$i]['shl5'];
//            $shm5 = $pushesh['shm5'] * $insurance_data[$i]['shm5'];
//            $storm = $pushesh['storm'] * $insurance_data[$i]['storm'];
//            $flood = $pushesh['flood'] * $insurance_data[$i]['flood'];
//            $s_va_sh = $pushesh['s_va_sh'] * $insurance_data[$i]['s_va_sh'];
//            $rain = $pushesh['rain'] * $insurance_data[$i]['rain'];
//            $fire_insrance_factor[$i] = [
//                'factor'=> $insurance_data[$i]['base']
//                + $zaminlarze
//                + $tl
//                + $nz
//                + $shl5
//                + $shm5
//                + $storm
//                + $flood
//                + $s_va_sh
//                + $rain ,
//                'insurance_id' => $insurance_data[$i]['insurance_id'],
////                'insurance_image' => $insurance_data[$i]['insurance_image'],
//            ];
//        }
//        create all coafitions
//        return $fire_insrance_factor;
//        return view('includes.fire-single-body',['fire_insrance_factor'=>$fire_insrance_factor,'capital'=>$capital,'n'=>$n]);
        return "yes its work";
    }
}
