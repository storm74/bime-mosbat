<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestAjaxController extends Controller
{
    public function test() {
    if (isset($_POST)){
//    		echo $_POST['search'];
        if ($_POST['search']=='سعید'){
            echo $message ="کارت درسته پسر";
//			    Session::flash('hale',$message);

        }
    }

}
    public function jason_ajax() {
     return "hello";
    }
}
