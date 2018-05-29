<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function menuSet(){
        $result = DB::select('select * from admin_menus');
        $places = \App\Menu::all();
        return view('admin.menu.menu-set',['menus'=>$result,'places'=>$places]);
    }
    public function menuPlaceUpdate(Request $request){
//            $input = $request->all();
            $menu = Menu::findOrFail($request->place_id);
            $menu['menu_id'] = $request->menu_id;
            $menu->save();
                return redirect()->back();
    }
}
