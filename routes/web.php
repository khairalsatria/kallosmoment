<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/about',[HomeController::class,'index']);
Route::get('/gallery',[GalleryController::class,'index']);
Route::get('/kategori', [KategoriController::class, 'index']);


