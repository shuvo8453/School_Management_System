<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:SUPER_ADMIN');
    }

    public function dashboard(){
        return view('super-admin.pages.dashboard');
     }
     public function Profile(){
        return view('admin.pages.profile');

     }
     public function signing(){
        return view('admin.pages.signing');

     }
}
