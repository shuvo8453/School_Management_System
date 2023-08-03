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

     public function AdminStore(Request $request)
     {
        $request->validate([
            'name' => 'string|required|min:3',
            'email' => 'email|required',
            'password' => 'required|min:5'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $role = Role::where('name', 'ADMIN')->first();

        if(empty($role)){
            $role = Role::create([
                'name' => 'ADMIN',
                'description' => 'I AM ADMIN'
            ]);
        }

        DB::table('role_user')->insert([
            'role_id' => $role->id,
            'user_id' => $user->id
        ]);

        return redirect()->back();
     }
}
