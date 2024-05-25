<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\User\UserController as AdminUserController;
use App\Http\Controllers\User\Auth\AuthUserController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Admin page
Route::view('/admin/login', 'admin.auth.login')->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.auth.login');

Route::prefix('admin')->as('admin.')->middleware(AdminAuth::class)->group(function () {
    Route::resource('users', AdminUserController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});


//Users page
Route::view('/user/login', 'user.auth.login')->name('user.login');
Route::post('/user/login', [AuthUserController::class, 'login'])->name('user.auth.login');
Route::view('/user/register', 'user.auth.register')->name('user.register');
Route::post('/user/register', [AuthUserController::class, 'register'])->name('user.auth.register');

Route::prefix('user')->as('user.')->middleware('auth')->group(function () {
    Route::view('/dashbord', 'user.pages.dashboard')->name('pages.dashboard');
    Route::post('/logout', [AuthUserController::class, 'logout'])->name('auth.logout');
});

