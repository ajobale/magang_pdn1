<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\Home\HomeController;

Route::middleware(['belum_login'])->group(function() {
    Route::get('/', [AuthController::class, 'index'])->name('/');
    Route::get('/register', [AuthController::class, 'daftar'])->name('/register');
    Route::post('register.post', [AuthController::class, 'register'])->name('/register.post');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('sudah_login')->group(function() {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');                                       
    Route::get('/home', [HomeController::class, 'index'])->name('/home');
   
    Route::get('/', [HomepageController::class, 'index'])->name('/');
    Route::get('/destinasi', [DestinasiController::class, 'index'])->name('/destinasi');

    Route::get('/review', [ReviewController::class, 'index'])->name('/review');
    Route::get('/tambahreview', [ReviewController::class, 'addreviewer'])->name('/tambahreview');
    Route::post('/tambah.save', [ReviewController::class, 'savereview'])->name('savereview');


    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});