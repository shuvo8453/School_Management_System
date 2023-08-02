<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:SUPER_ADMIN');
    }

    public function dashboard()
    {
        return view('super-admin.pages.dashboard');
    }

     public function Profile()
     {
        return view('super-admin.pages.profile');
     }

     public function Admin()
     {
        $users = User::whereHas('roles', function($query){
            $query->where('name', 'ADMIN');
        })->get();
        return view('super-admin.pages.admin', ['users'=>$users]);

     }
}
