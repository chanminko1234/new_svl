<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class RoleController extends Controller
{
    public function __construct(){
        $this->middleware('sentinelauth');
        $this->middleware('roleaccess');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $roles = \Sentinel::getRoleRepository()->ofType('watcher')->get();
        // dd($roles);

        $roles = \Sentinel::getRoles()->sortBy('name');
        $row_number = 1; //to loop row number of table
        return view('backend.role.index', compact(['roles', 'row_number']));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.role.create');
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
                    'RoleName' => 'required | min:4',
                    'post' => 'required',
                    'Description' => 'required | min:20',
            ]);

        $roleName = $request->input("RoleName");
        $cbUser = $request->input("user");
        $cbPost = $request->input("post");
        $description = $request->input("Description");

        storeRole($roleName, ['user', 'post'], [$cbUser, $cbPost], $description);

        return redirect()->back()->with('success', 'New Role Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = \Sentinel::getRoleRepository()->find($id);

        return view("backend.role.show", compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = \Sentinel::findRoleById($id);

        return view('backend.role.edit', compact('role'));
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
                    'RoleName' => 'required | min:4',
                    'post' => 'required',
                    'Description' => 'required | min:20',
            ]);

        /* u_name mean updated/new value to replace as the old. */

        $u_roleName = $request->input("RoleName");
        $u_cbUser = $request->input("user");
        $u_cbPost = $request->input("post");
        $u_description = $request->input("Description");

        /*
        * First parameter $id -> ID of the role to update
        * Second parameter $u_roleName -> updated/new role's name
        * Third parameter ["put update/new role's permissions checkboxes values"] 
        * Fourth parameter $u_description -> updated/new role's description 
        */

        updateRole($id, $u_roleName,['user', 'post'], [$u_cbUser, $u_cbPost], $u_description);
        
        return redirect()->to('backend/role/'.$id.'/show')->with('success', 'Role Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = \Sentinel::getRoleRepository()->destroy($id); //Destroy the role without Retrieving it.

        return redirect()->back();
    }
}
