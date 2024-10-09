<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.gallery');
});

Route::get('/aboutus',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/index',[GalleryController::class,'index']);

