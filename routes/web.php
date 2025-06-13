<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('/dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/{kendaraan}', [KendaraanController::class, 'show'])->name('kendaraan.show');
Route::get('/kendaraan/{kendaraan}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::put('/kendaraan/{kendaraan}', [KendaraanController::class, 'update'])->name('kendaraan.update');
Route::delete('/kendaraan/{kendaraan}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');

Route::get('/sewa/create/{kendaraan?}', [SewaController::class, 'create'])->name('sewa.create');
Route::post('/sewa', [SewaController::class, 'store'])->name('sewa.store');

Route::get('/pengguna/sewa', [PenggunaController::class, 'index2'])->name('pengguna.index2');
Route::get('/pengguna/about', [PenggunaController::class, 'about'])->name('pengguna.about');
Route::get('/pengguna/contact', [PenggunaController::class, 'contact'])->name('pengguna.contact');
Route::get('/pengguna/faq', [PenggunaController::class, 'faq'])->name('pengguna.faq');
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');

Route::get('/transaksi', [SewaController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/{sewa}/edit', [SewaController::class, 'edit'])->name('transaksi.edit');    
Route::put('/transaksi/{sewa}', [SewaController::class, 'update'])->name('sewa.update');
Route::delete('transaksi/{sewa}', [SewaController::class, 'destroy'])->name('transaksi.destroy');

Route::get('/admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register']);
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');



require __DIR__.'/auth.php';

