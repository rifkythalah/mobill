<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Dashboard utama admin
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Profile admin
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// CRUD Kendaraan
Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/{kendaraan}', [KendaraanController::class, 'show'])->name('kendaraan.show');
Route::get('/kendaraan/{kendaraan}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::put('/kendaraan/{kendaraan}', [KendaraanController::class, 'update'])->name('kendaraan.update');
Route::delete('/kendaraan/{kendaraan}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');

// CRUD Transaksi/Sewa
Route::get('/transaksi', [SewaController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/{sewa}/edit', [SewaController::class, 'edit'])->name('transaksi.edit');    
Route::put('/transaksi/{sewa}', [SewaController::class, 'update'])->name('sewa.update');
Route::delete('transaksi/{sewa}', [SewaController::class, 'destroy'])->name('transaksi.destroy');
Route::get('/transaksi/create', [SewaController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi', [SewaController::class, 'store'])->name('transaksi.store');

// CRUD User
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Auth admin
Route::get('/admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register']);
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/', function () {
    return redirect()->route('admin.login');
});

require __DIR__.'/auth.php';

