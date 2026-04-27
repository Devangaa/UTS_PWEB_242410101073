<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('login');

Route::post('/login-proses', [PageController::class, 'prosesLogin'])->name('login.proses');

Route::get('/dashboard/{username}', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile/{username}', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan/{username}', [PageController::class, 'pengelolaan'])->name('pengelolaan');