<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FotograferController;
use App\Http\Controllers\JadwalKerjaController;
use App\Http\Controllers\ProfileController;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Route;

Route::get('/kallos-moments', function () {
    return view('home');
});


Route::get('/kallos-moments',[HomeController::class,'index']);

Route::get('/admin.layout.dashboard',[DashboardController::class,'index']);

Route::get('/kallos-moments/#packages', [PackageController::class, 'index'])->name('packages.index');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

Route::get('/admin.kategori.cetakpdf', [KategoriController::class, 'cetakPdf']);
Route::resource('/admin-kategori',KategoriController::class)->middleware('auth');

Route::resource('/admin-jadwal_kerja', JadwalKerjaController::class)->middleware('auth');

Route::resource('/admin-keuangan',KeuanganController::class)->middleware('auth');

Route::resource('/admin-user',UserController::class)->middleware('auth');

Route::resource('/admin-fotografer',FotograferController::class)->middleware('auth');


// Route untuk Pemesanan

Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');
Route::get('/pemesanan/{id}/detail', [PemesananController::class, 'detail'])->name('pemesanan.detail');
Route::get('pemesanan/info/{id}', [PemesananController::class, 'info'])->name('pemesanan.info');
Route::post('/pemesanan/{id}/upload', [PemesananController::class, 'uploadBukti'])->name('pemesanan.uploadBukti');
Route::get('/riwayat', [PemesananController::class, 'riwayat'])->name('pemesanan.riwayat');

Route::get('/admin-pemesanan', [AdminController::class, 'index'])->name('admin.pemesanan.index');
Route::post('/admin/konfirmasi/{id}', [AdminController::class, 'konfirmasi'])->name('admin.konfirmasi');
Route::post('/admin/done/{id}', [AdminController::class, 'done'])->name('admin.done');
Route::post('/admin/hapus/{id}', [AdminController::class, 'hapus'])->name('admin.hapus');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

