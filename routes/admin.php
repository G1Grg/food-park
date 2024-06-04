<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // admin Dashboard Route
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Profile Route
    Route::get('dashboard', [ProfileController::class, 'index'])->name('profile');
});
