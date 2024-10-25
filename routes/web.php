<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', App\Http\Controllers\Dashboard\DashboardController::class, )->name('home');
// Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/', DashboardController::class)->name('admin.index');
});


Route::prefix('user')->middleware(['auth', 'isUser'])->name('user. ')->group(function () {
    Route::get('/', DashboardController::class)->name('index');
    Route::get('/riwayat-pengaduan', [UserController::class, 'riwayat-Pengaduan'])->name('riwayat-pengaduan');
});
