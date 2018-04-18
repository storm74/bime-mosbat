<?php

namespace App\Http\Controllers;

use App\Fire;
use App\Http\Requests\InsuranceRequest;
use App\Insurance;
use App\Photo;
use App\ThirdPartyInsurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminInsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$insurances = Insurance::all()->sortBy('created_at');
        return view('admin.insurance.index',compact('insurances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

	    return view('admin.insurance.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsuranceRequest $request)
    {

				$input = $request->all();
	    if ($file = $request->file('photo_id')){
		    $name = time().$file ->getClientOriginalName();
		    $file->move('admin_assets/images/insurance_icons',$name);
		    $photo = Photo::create(['path' => $name]);
	    }
	    $input['photo_id'] = $photo->id;
	    $third = new ThirdPartyInsurance();
	    $third->save();
	    $input['third_party_insurance_id'] = $third->id;
	    $user = Auth::user();
	    $insurance = $user->insurances()->create($input);
	    $insurance->fire()->create();

	    $message ="شرکت بیمه".' '.$request->name." "."با موفقیت ایجاد شد";
	    Session::flash('added_insurance',$message);
//        $insurance->fire()->create(null);
	    return redirect()->action('AdminInsuranceController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$insurance = Insurance::findOrFail($id);
    	$third_party = $insurance->thirdParty;
    	$fire = $insurance->fire;
        return view('admin.insurance.edit',['insurance'=>$insurance,'thirdParty'=>$third_party,'fire'=>$fire]);
    }
    public function thirdPartyEdit(Request $request){
        $third = Insurance::findOrFail($request->id)->thirdParty;
        $input = $request->all();
        $third->update($input);
        return redirect()->back();
    }
    public function fireEdit(Request $request){
        $fire = Insurance::findOrFail($request->id)->fire;
        $input = $request->all();
        $fire->update($input);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsuranceRequest $request, $id)
    {
	    $insurance_old_title = Insurance::findOrFail($id)->name;
	    $insurance_new_title = $request->name;
	    $input = $request->all();

	    $insurance = Insurance::findOrFail($id);
	    if ($file=$request->file('photo_id')){
		    if ($insurance->photo){
			    $old_photo_name = $insurance->photo->id;
			    $old_photo_path = $insurance->photo->insurance_image();
			    Photo::destroy($old_photo_name);
			    unlink(public_path()."/".$old_photo_path);
		    }
		    $name = time().$file->getClientOriginalName();
		    $file->move('admin_assets/images/insurance_icons/',$name);
		    $photo = Photo::create(['path'=>$name]);

		    $input['photo_id'] = $photo->id;
	    }
	    $insurance->update($input);
	    if($insurance_new_title==$insurance_old_title){
		    $message ="شرکت بیمه :".' '.$insurance_new_title." "."با موفقیت به روز رسانی شد";
	    }else{
		    $message ="شرکت بیمه :".' '.$insurance_old_title." "."به نام "." ".$insurance_new_title." "." تغیر یافت و سایر تغیرات نیز با موفقیت ذخیره شدند";
	    }

	    Session::flash('updated_insurance',$message);
	    return redirect()->action('AdminInsuranceController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $insurance = Insurance::findOrFail($id);
	    $name = $insurance->name;
	    unlink(public_path()."/".$insurance->photo->insurance_image());
	    $photo_id = $insurance->photo->id;
	    $insurance->delete();
	    Photo::destroy($photo_id);
	    $message ="شرکت بیمه :".' '.$name." "."با موفقیت حذف گردید";
	    Session::flash('deleted_insurance',$message);
	    return redirect()->action('AdminInsuranceController@index');
    }
}
