<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('signin');
})->name('signin');
Route::post('/login', [LoginController::class, 'index'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// for super admin
Route::get('/superadmin/dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');
Route::get('/superadmin/profiles', [SuperAdminController::class, 'Profile'])->name('superadmin.profile');
Route::get('/superadmin/admin', [SuperAdminController::class, 'Admin'])->name('superadmin.admin');
Route::post('/superadmin/admin', [SuperAdminController::class, 'AdminStore'])->name('superadmin.admin.store');



// for admin
// Route::get('/', function () {
//     return view('admin.pages.dashboard');
// });
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/profiles', [AdminController::class, 'Profile'])->name('profile');
Route::get('/signin', [AdminController::class, 'signin'])->name('signin');
Route::get('/signup', [AdminController::class, 'signup'])->name('signup');
