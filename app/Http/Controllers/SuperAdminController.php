<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function viewadmin(){
        return view('super_admin.admin_index');
    }

    public function admincreate(){
        return view('super_admin.admin_create');
    }
}
