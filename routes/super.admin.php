<?php

use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth', 'role:SUPER_ADMIN')->group(function(){
    Route::get('/dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');
    Route::get('/profiles', [SuperAdminController::class, 'Profile'])->name('superadmin.profile');
    Route::get('/admin', [SuperAdminController::class, 'Admin'])->name('superadmin.admin');
    Route::post('/admin', [SuperAdminController::class, 'AdminStore'])->name('superadmin.admin.store');
});


