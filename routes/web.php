<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});


Route::get('/layouts.home',[HomeController::class,'index']);
Route::get('/admin.dashboard',[DashboardController::class,'index']);

Route::get('/cetakpdf/kategori', [KategoriController::class, 'cetakPdf']);

Route::resource('/admin-kategori',KategoriController::class)->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/user.pemesanan', [PemesananController::class, 'index']);


