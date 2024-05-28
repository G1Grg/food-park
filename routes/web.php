<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

//     Route::get('dashboard', [AdminDashboardController::class, 'index'])->middleware('auth', 'role:admin')->name('dashboard');
// });
// // Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth', 'role:admin')->name('admin.dashboard');

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('dashboard', [AdminDashboardController::class, 'index'])->middleware('auth', 'role:admin')->name('dashboard');
// });
