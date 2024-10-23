<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/about',[HomeController::class,'index']);
Route::get('/gallery',[GalleryController::class,'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/user.pemesanan', [PemesananController::class, 'index']);


