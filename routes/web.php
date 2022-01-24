<?php

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Auth\AdminAuthController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('adminLogin');
});

Auth::routes(['register' => false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
//    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
//    Route::get('users/get-data', [UserController::class, 'getData']);
//    Route::resource('/users', UserController::class);
//    Route::resource('/departments', DepartmentController::class);
//    Route::resource('/expenses', ExpenseController::class);
//    Route::post('/users_password', [UserController::class, 'changePassword'])->name('password.update');
//
//});

Route::get('admin/login',[AdminAuthController::class,'getLogin'] )->name('adminLogin');
Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
    // Admin Dashboard
    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
});
