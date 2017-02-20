<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
	public function __construct(){
	   $this->middleware('sentinelauth');
	}


    public function index(){
    	$user = \Sentinel::check();

        $states = \App\States::get();

    	$roles = ( (isSuperAdmin($user->id)) ? \Sentinel::getRoles()->sortBy('name') : null );

    	return view('backend.setting.general', compact('user','states', 'roles'));
    }


    public function save(Request $request){
    	$roles = $request->input('Roles');

    	saveDefaultRoles($roles);
    	return redirect()->back()->with('success', 'Saved Changes!');
    }
}
