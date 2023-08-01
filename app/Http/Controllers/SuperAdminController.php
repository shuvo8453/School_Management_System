<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:SUPER_ADMIN');
    }

    public function dashboard(){
        if(auth()){
            $user = auth()->user();
            return view('super-admin.pages.dashboard',compact('user'));
        }else{
            return redirect()->route('login');
        }

     }
     public function Profile(){
        return view('admin.pages.profile');

     }
     public function signin(){
        return view('signin');
     }
}
