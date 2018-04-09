<?php

namespace App\Http\Controllers;

use App\carsCategory;
use App\personal_car_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminInsuranseController extends Controller
{
    public function personalCars(){
        $car_category = carsCategory::all()->sortByDesc('updated_at');
        $personal_car_list =personal_car_list::all()->sortByDesc('updated_at');
        return view('admin.car-list.personal-car-list',['car_category'=>$car_category,'personal_car_list'=>$personal_car_list]);
    }
    public function personalCarsCategoryAdd(Request $request){
        $input = $request->all();
        carsCategory::create($input);
        echo " <div style=\"line-height: 26px;font-size: 106%;font-family: yekan;\" class=\"alert alert-success alert-dismissable fade in\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                دسته بندی موردنظر با موفقیت افزوده شد
            </div>";
    }
    public function personalCarsAdd(Request $request){
        $input = $request->all();
        $input['pps'] = $request->detail == 'pps' ? 1 : 0;
        $input['gfs'] = $request->detail == 'gfs' ? 1 : 0;
        $input['ofs'] = $request->detail == 'ofs' ? 1 : 0;
        $input['lfs'] = $request->detail == 'lfs' ? 1 : 0;
        personal_car_list::create($input);
        echo " <div style=\"line-height: 26px;font-size: 106%;font-family: yekan;\" class=\"alert alert-success alert-dismissable fade in\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <strong>سامانه اطلاع رسانی هوشمند : </strong>
                خودرو موردنظر با موفقیت افزوده شد
            </div>";
    }
    public function personalCarCategoryDelete(Request $request){

        $category = carsCategory::findOrFail($request->id);
        $car_models = $category->models;
        if ($car_models){
            $n  = count($car_models);
        }
        foreach ($car_models as $car_model){
            $car_model->delete();
        }
        $category->delete();
        $message ="دسته بندی".' '.$category->family." "."با موفقیت حذف گردید";
        Session::flash('deleted_category',$message);
        return redirect()->back();
    }
    public function personalCarDelete(Request $request){

        $car_model = personal_car_list::findOrFail($request->id);
        $message ="خودرو مدل".' '.$car_model->name." "."با موفقیت حذف گردید";
        $car_model->delete();
        Session::flash('deleted_car',$message);
        return redirect()->back();
    }
    public function personalCarList(){}

}
