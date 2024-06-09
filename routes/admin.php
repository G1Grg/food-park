<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // admin Dashboard Route
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Profile Route
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');

    Route::put('profile', [ProfileController::class, 'updateProfile'])->name('profile.update');

    Route::PUT('profile/update_password', [ProfileController::class, 'updateProfilePassword'])->name('profile.update.password');
});
