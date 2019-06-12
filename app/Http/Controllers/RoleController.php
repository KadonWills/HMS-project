<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    //This class contains all the buisiness logic involving roles

    /**
     * Returns the view containning the roles
     * 
     * @author Kadon <kapolw@gmail.com>
     * @param void
     * @return View
     */
    public function  displayRoles() {
        return view('roles', ['roles' => RoleModel::findAll()]);
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
