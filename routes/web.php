<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\lapanganController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\SocialliteController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\ulasanController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;


Route::get('/', [homeController::class, "show_landing"])->name("landing");

Route::get('/login', [homeController::class, "show_login"])->name("login");
Route::get('/logout', [homeController::class, "logout"]);
Route::post('/loginakun', [homeController::class, "loginakun"])->name('loginakun');
Route::post('/login/auth', [homeController::class, 'login'])->name('auth');

Route::prefix('admin')->middleware("admin")->group(function () {
    Route::get('/dashboard', [adminController::class, 'show_dashboard'])->name('dashboard');
    Route::get('/pelanggan', [adminController::class, 'show_pelanggan'])->name('pelanggan');
    Route::get('/ulasan', [adminController::class, 'show_ulasan'])->name('ulasan');
    Route::get('/laporan', [adminController::class, 'show_laporan'])->name('laporan');
    Route::get('/gallery', [adminController::class, 'show_gallery'])->name('gallery');

    Route::prefix('gallery')->group(function () {
        Route::get('/', [adminController::class, 'show_gallery'])->name('gallery');
        Route::post('/tambah', [galleryController::class, 'tambah'])->name('tambah_gallery');
        Route::put('/{id}/edit', [galleryController::class, 'edit'])->name('edit_gallery');
        Route::delete('/{id}/delete', [galleryController::class, 'delete'])->name('delete_gallery');
    });
    Route::prefix('lapangan')->group(function () {
        Route::get('/', [adminController::class, 'show_lapangan'])->name('lapangan');
        Route::post('/tambah', [lapanganController::class, 'tambah'])->name('tambah_lapangan');
        Route::put('/{id}/edit', [lapanganController::class, 'edit'])->name('edit_lapangan');
        Route::delete('/{id}/delete', [lapanganController::class, 'delete'])->name('delete_lapangan');
    });
    Route::prefix('jadwal')->group(function () {
        Route::get('/{id}', [adminController::class, 'show_jadwal'])->name('jadwal');
        Route::post('/tambah', [jadwalController::class, 'tambah'])->name('tambah_jadwal');
        Route::put('/{id}/edit', [jadwalController::class, 'edit'])->name('edit_jadwal');
        Route::delete('/{id}/delete', [jadwalController::class, 'hapus'])->name('delete_jadwal');
    });

    Route::prefix('transaksi')->group(function () {
        Route::get('/', [adminController::class, 'show_transaksi'])->name('transaksi');
        Route::post('/tambah', [transaksiController::class, 'tambah'])->name('tambah_transaksi');
        Route::put('/{id}/edit', [transaksiController::class, 'edit'])->name('edit_transaksi');
        Route::delete('/{id}/delete', [transaksiController::class, 'hapus'])->name('delete_transaksi');
    });
});

Route::prefix('user')->middleware('user')->group(function () {
    Route::get('/dashboard', [userController::class, 'show_dashboard'])->name('dashboard_user');

    Route::prefix('transaksi')->group(function () {
        Route::get('/', [userController::class, 'show_transaksi'])->name('transaksi_user');
        Route::post('/tambah', [transaksiController::class, 'tambah_u'])->name('tambahu_transaksi');
        Route::put('/{id}/edit', [transaksiController::class, 'edit_u'])->name('editu_transaksi');
        Route::delete('/{id}/delete', [transaksiController::class, 'hapus_u'])->name('deleteu_transaksi');
    });

    Route::prefix('ulasan')->group(function () {
        Route::get('/', [userController::class, 'show_ulasan'])->name('ulasan_user');
        Route::post('/tambah', [ulasanController::class, 'tambah'])->name('tambah_ulasan_user');
        Route::put('{id}/edit', [ulasanController::class, 'edit'])->name('edit_ulasan_user');
        Route::delete('/{id}/delete', [ulasanController::class, 'delete'])->name('delete_ulasan_user');
    });
});
Route::get('/auth/google/callback', [SocialliteController::class, 'callback'])->name('redirect');
Route::get('/auth/redirect', [SocialliteController::class, 'redirect'])->name('redirect');
