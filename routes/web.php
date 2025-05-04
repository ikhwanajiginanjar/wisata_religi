<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\KontakController;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');  // Menampilkan halaman beranda
Route::get('/profil', [PageController::class, 'profil'])->name('profil');  // Menampilkan halaman profil
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');  // Menampilkan halaman layanan
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');  // Menampilkan halaman galeri
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');  // Menyimpan data kontak
Route::get('/kontak/create', [KontakController::class, 'create'])->name('kontak.create');  // Menampilkan form tambah kontak
Route::get('/kontak/{id}', [KontakController::class, 'show'])->name('kontak.show');
Route::get('/kontak/{id}/edit', [KontakController::class, 'edit'])->name('kontak.edit');
Route::delete('/kontak/{id}', [KontakController::class, 'destroy'])->name('kontak.destroy');
Route::put('/kontak/{id}', [KontakController::class, 'update'])->name('kontak.update');