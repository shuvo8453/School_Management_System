<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            return $this->authorizeAccess($user);
        }else{
            return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
        }
    }

    private function authorizeAccess($user){
        $role = Role::get()->first();

        if($role->name === "SUPER_ADMIN"){
            return redirect()->route('superadmin.dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('signin');
    }
}
