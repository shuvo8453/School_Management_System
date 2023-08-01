<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ADMIN');
    }

    public function dashboard(){
       return view('admin.pages.dashboard');

    }
    public function Profile(){
       return view('admin.pages.profile');

    }
    public function signin(){
       return view('signin');

    }
    public function signup(){
        return view('admin.pages.signup');

     }

}
