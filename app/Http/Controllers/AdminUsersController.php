<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$users = User::all()->sortBy("id");
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
    	$input =$request->all();
    	if ($file = $request->file('photo_id')){
			$name = time().$file ->getClientOriginalName();
			$file->move('admin_assets/images/profiles',$name);
			$photo = Photo::create(['path' => $name]);

	    }
	     $input['photo_id'] = $photo->id;
	    $input['password'] = bcrypt($request->password);

	    $user = new User($input);
	    $role_id = $request->role;
	    $role = Role::findOrFail($role_id);
	    $role->users()->save($user);
	    return redirect()->action('AdminUsersController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	    return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$user = User::findOrFail($id);
	    return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
    	if (trim($request->password)==''){
			$input = $request->except('password');
	    }else{
			$input = $request->all();
			$input['password'] = bcrypt($request->password);
	    }
    	$user = User::findOrFail($id);
    	if ($file=$request->file('photo_id')){
			$name = time().$file->getClientOriginalName();
		    $file->move('admin_assets/images/profiles',$name);
		    $photo = Photo::create(['path'=>$name]);
		    $input['photo_id'] = $photo->id;
	    }
	    $role_id = $request->role;
    	$input['role_id'] = $role_id;
		$user->update($input);
	    return redirect()->action('AdminUsersController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
