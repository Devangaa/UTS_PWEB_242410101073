<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman Awal
Route::get('/', [PageController::class, 'login'])->name('login');

// Proses Login (Menangkap data dari Form)
Route::post('/login-proses', [PageController::class, 'prosesLogin'])->name('login.proses');

// Halaman-halaman Dashboard & Profile (Membawa parameter Username)
Route::get('/dashboard/{username}', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile/{username}', [PageController::class, 'profile'])->name('profile');

// Halaman Pengelolaan (Mengambil data Produk dari DB)
Route::get('/pengelolaan/{username}', [PageController::class, 'pengelolaan'])->name('pengelolaan');