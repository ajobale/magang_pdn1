<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\Home\HomeController;

// Route::middleware(['guest'])->group(function() {
//     Route::get('/', [LoginContoller::class, 'index'])->name('/');
// });


    Route::get('/', [AuthController::class, 'index'])->name('/');
    Route::get('/register', [AuthController::class, 'daftar'])->name('/register');
    Route::post('register.post', [AuthController::class, 'register'])->name('/register.post');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');                                       




    Route::get('/home', [HomeController::class, 'index'])->name('/home');
    Route::get('/tambah', [HomeController::class, 'tambah'])->name('/tambah');
    Route::post('/tambah.save', [HomeController::class, 'save'])->name('save');
    Route::get('/edit.data/{id}', [HomeController::class, 'edit'])->name('edit');
    Route::post('/edit.data/{id}', [HomeController::class, 'update'])->name('update');
    Route::get('/hapus.data/{id}', [HomeController::class, 'hapus'])->name('hapus');

    Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/destinasi', [DestinasiController::class, 'index'])->name('/destinasi');

    Route::get('/review', [ReviewController::class, 'index'])->name('/review');
    Route::get('/tambahreview', [ReviewController::class, 'addreviewer'])->name('/tambahreview');
    Route::post('/tambah.save', [ReviewController::class, 'savereview'])->name('savereview');
