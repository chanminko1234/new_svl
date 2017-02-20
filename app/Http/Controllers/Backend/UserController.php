<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class UserController extends Controller 
{
    public function __construct(){
        $this->middleware('sentinelauth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \Sentinel::getUserRepository()->get()->sortBy('first_name');
        $roles = \Sentinel::getRoleRepository()->get()->sortBy('name');
        // dd($roles->last()->name);
        $current_user = \Sentinel::check();

        $row_number = 1;
        return view('backend.user.index',compact('users', 'row_number', 'roles', 'current_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = \Sentinel::getRoles()->sortBy('name');
        return view('backend.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Username' => 'required | min:4',
            'Email' => 'required | email',
            'password'  => 'required|min:4|confirmed',
            'password_confirmation' => 'same:password',
            'Roles' => 'required',
            ]);

        /* u_name mean updated/new value to replace as the old. */

        $Roles = $request->input("Roles");

        $credentials = [
           'first_name'    => $request->input("Username"),
           'email'         => $request->input("Email"),
           'password'      => $request->input("password"),
       ];

        // if($request->input('activate') == 'activate'){
        //     $user = \Sentinel::registerAndActivate($credentials);
        //     setUserRoles($user, $Roles);

        //     return redirect()->back()->with('success', 'New User Registered & Activated!');

        // }else{
        //     $user = \Sentinel::register($credentials);
        //     $activation = \Activation::create($user);

        //     setUserRoles($user, $Roles);
        //     return redirect()->back()->with('success', 'New User Registered!');
        // }
       $user = \Sentinel::register($credentials);
       $activation = \Activation::create($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \Sentinel::getUserRepository()->findById($id);
        $roles = \Sentinel::getRoleRepository()->get()->sortBy('name');

        return view('backend.user.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \Sentinel::findUserById($id);
        $roles = \Sentinel::getRoleRepository()->get();

        return view('backend.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Username' => 'required | min:4',
            'Email' => 'required | email',
            'Roles' => 'required'
            ]);

        /* u_name mean updated/new value to replace as the old. */

        $Roles = $request->input("Roles");
        $user = \Sentinel::findUserById($id);

        if($user->email == $request->input("Email")){
           $credentials = [
               'first_name' => $request->input("Username"),
           ];
        }else{
            $credentials = [
               'first_name' => $request->input("Username"),
               'email' => $request->input('Email'),
           ];
        }

        $user = \Sentinel::update($user, $credentials);

        updateUserRoles($user, $Roles);

        return redirect()->to('backend/user/'.$id.'/show')->with('success', 'User Updated!');
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
