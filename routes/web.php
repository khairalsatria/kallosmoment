<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.about');
});

Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/gallery',[GalleryController::class,'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/submit', [KategoriController::class, 'submit']);

