<?php

namespace App\Http\Controllers;
use App\RoleModel;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //This class contains all the buisiness logic involving roles

    /**
     * Returns the view containning the roles
     * 
     * @author Kadon <kapolw@gmail.com>
     * @param void
     * @return \Illuminate\Http\Response
     */
    public function  displayRoles() {
        return view('index', ['roles' => RoleModel::all()] );
    }


     /**
     * Display a listing of the resource.
     *
     * @author Kadon <kapolw@gmail.com> 
     * @param void
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = RoleModel::findAll();
        return view("index")->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @author Kadon <kapolw@gmail.com>
     * @param void
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @author Kadon <kapolw@gmail.com>
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @author Kadon <kapolw@gmail.com>
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
     * @author Kadon <kapolw@gmail.com>
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @author Kadon <kapolw@gmail.com>
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @author Kadon <kapolw@gmail.com>
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Deletes a role from the given roleId
     * 
     * @author Kadon <kapolw@gmail.com>
     * @param Integer $id
     * @return void
     */
    public function deleteRole($id){
        
    }

    
}
