<?php

use App\Http\Controllers\AdminController;
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

Route::get('/login', function() {
    return view('super-admin.pages.signing');
})->name('login');


// for super admin
Route::get('/', function () {
    return view('super-admin.pages.dashboard');
});
Route::get('/admin/dashboard', [SuperAdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/profiles', [SuperAdminController::class, 'Profile'])->name('profile');
Route::get('/admin/signing', [SuperAdminController::class, 'signing'])->name('signing');
Route::get('/admin/signup', [SuperAdminController::class, 'signup'])->name('signup');


// for admin
Route::get('/', function () {
    return view('admin.pages.dashboard');
});
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/profiles', [AdminController::class, 'Profile'])->name('profile');
Route::get('/signing', [AdminController::class, 'signing'])->name('signing');
Route::get('/signup', [AdminController::class, 'signup'])->name('signup');
