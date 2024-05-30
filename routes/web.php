<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\Mapel\MapelController;

// Route::middleware(['guest'])->group(function() {
//     Route::get('/', [LoginContoller::class, 'index'])->name('/');
// });

Route::middleware('belum_login')->group(function() {
    Route::get('/', [AuthController::class, 'index'])->name('/');
    Route::get('/register', [AuthController::class, 'daftar'])->name('/register');
    Route::post('register.post', [AuthController::class, 'register'])->name('/register.post');
    Route::post('login', [AuthController::class, 'login'])->name('login');
                                            

});


Route::middleware('sudah_login')->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('/home');
    Route::get('/tambah', [HomeController::class, 'tambah'])->name('/tambah');
    Route::post('/tambah.save', [HomeController::class, 'save'])->name('save');
    Route::get('/edit.data/{id}', [HomeController::class, 'edit'])->name('edit');
    Route::post('/edit.data/{id}', [HomeController::class, 'update'])->name('update');
    Route::get('/hapus.data/{id}', [HomeController::class, 'hapus'])->name('hapus');
    Route::get('/keluar', [AuthController::class, 'logout'])->name('/keluar');



    Route::get('/mapel', [MapelController::class, 'index'])->name('/mapel');
    Route::get('/tambahmapel', [MapelController::class, 'tambah'])->name('/tambahmapel');
    Route::post('/tambah.savemapel', [MapelController::class, 'save'])->name('savemapel');
    Route::get('/editmapel.data/{id}', [MapelController::class, 'editmapel'])->name('editmapel');
    Route::post('/updatemapel.data/{id}', [MapelController::class, 'updatemapel'])->name('updatemapel');
    Route::get('/hapusmapel.data/{id}', [MapelController::class, 'hapus'])->name('hapusmapel');



        Route::get('/service', [ServiceController::class, 'index'])->name('/service');
        Route::get('/tambahservice', [ServiceController::class, 'tambahservice'])->name('/tambahservice');
        Route::post('/tambahservice.save', [ServiceController::class, 'saveservice'])->name('saveservice');
        Route::get('/editservice.data/{id}', [ServiceController::class, 'editservice'])->name('editservice');
        Route::post('/editservice.data/{id}', [ServiceController::class, 'updateservice'])->name('updateservice');
        Route::get('/hapusservice.data/{id}', [ServiceController::class, 'hapusservice'])->name('hapusservice');


        Route::get('/kota', [KotaController::class, 'index'])->name('/kota');

});



