<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\customer\CustomerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'CheckLogin'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [HomeController::class, 'logout'])->name('logout');
});
Route::get('', [AdminController::class, 'index'])->name('admin.login');
Route::get('admin-register', [AdminController::class, 'register'])->name('admin.register');
Route::post('admin-register-do', [AdminController::class, 'register_do'])->name('admin.register.do');
Route::post('admin-login-do', [AdminController::class, 'login_do'])->name('admin.login.do');


Route::get('customer-register', [CustomerController::class, 'register'])->name('customer.register');
Route::post('customer-register-do', [CustomerController::class, 'register_do'])->name('customer.register.do');
Route::get('customer-login', [CustomerController::class, 'index'])->name('customer.login');
Route::post('customer-login-do', [CustomerController::class, 'login_do'])->name('customer.login.do');
