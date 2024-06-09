<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProfileController;
use Illuminate\Support\Facades\Route;

// front end controller route

Route::get('/', [FrontendController::class, 'index'])->name('home');

// dashboard Controller Route
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
});

// admin auth controller route
Route::get('admin/login', [AdminAuthController::class, 'index'])->name('admin.index');
// Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');



require __DIR__ . '/auth.php';

// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

//     Route::get('dashboard', [AdminDashboardController::class, 'index'])->middleware('auth', 'role:admin')->name('dashboard');
// });
// // Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth', 'role:admin')->name('admin.dashboard');

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('dashboard', [AdminDashboardController::class, 'index'])->middleware('auth', 'role:admin')->name('dashboard');
// });
