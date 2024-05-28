<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Mapel\MapelController;

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

Route::get('/mapel', [MapelController::class, 'index'])->name('/mapel');
Route::get('/tambahmapel', [MapelController::class, 'tambah'])->name('/tambahmapel');
Route::post('/tambah.savemapel', [MapelController::class, 'save'])->name('savemapel');
Route::get('/editmapel.data/{id}', [MapelController::class, 'editmapel'])->name('editmapel');
Route::post('/updatemapel.data/{id}', [MapelController::class, 'updatemapel'])->name('updatemapel');
Route::get('/hapusmapel.data/{id}', [MapelController::class, 'hapus'])->name('hapusmapel');



