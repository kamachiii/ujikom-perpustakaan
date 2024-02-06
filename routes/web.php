<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register-action', [AuthController::class, 'registerAction'])->name('register-action');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login-action', [AuthController::class, 'loginAction'])->name('login-action');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/peminjaman', [AdminController::class, 'pinjam'])->name('pinjam');
    Route::post('/peminjaman-action/{id}', [AdminController::class, 'pinjamAction'])->name('pinjam-action');
});

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard-admin');
    Route::get('/buku', [AdminController::class, 'buku'])->name('buku');
});


Route::get('/buku-relasi', [AdminController::class, 'relasi'])->name('buku-relasi');
