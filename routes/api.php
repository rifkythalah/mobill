<?php

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Kendaraan API
Route::get('/kendaraan', [KendaraanController::class, 'apiIndex']);
Route::get('/kendaraan/{id}', [KendaraanController::class, 'apiShow']);
Route::post('/kendaraan', [KendaraanController::class, 'apiStore']); // untuk admin
Route::put('/kendaraan/{id}', [KendaraanController::class, 'apiUpdate']); // untuk admin
Route::delete('/kendaraan/{id}', [KendaraanController::class, 'apiDestroy']); // untuk admin

// Sewa/Transaksi API
Route::get('/riwayat', [SewaController::class, 'apiIndex']);
Route::post('/riwayat', [SewaController::class, 'apiStore']);
Route::get('/riwayat/{id}', [SewaController::class, 'apiShow']);

// User API
Route::get('/user', [UserController::class, 'apiIndex']);
Route::get('/user/{id}', [UserController::class, 'apiShow']);
Route::put('/user/{id}', [UserController::class, 'apiUpdate']);
