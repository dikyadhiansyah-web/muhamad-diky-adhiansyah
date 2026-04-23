<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CipherController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CipherController::class, 'index']);
Route::post('/process', [CipherController::class, 'process'])->name('cipher.process');

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginProses']);

Route::get('/dashboard', [AuthController::class, 'dashboard']);

// halaman daftar pengguna
use App\Http\Controllers\PenggunaController;
Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/create', [PenggunaController::class, 'create']);
Route::post('/pengguna/store', [PenggunaController::class, 'store']);
Route::get('/pengguna/edit/{id_pengguna}', [PenggunaController::class, 'edit']);
Route::post('/pengguna/update/{id_pengguna}', [PenggunaController::class, 'update']);
Route::get('/pengguna/delete/{id_pengguna}', [PenggunaController::class, 'destroy']);


use App\Http\Controllers\BukuController;
Route::get('/buku', [BukuController::class, 'index']);

Route::get('/logout', [AuthController::class, 'logout']);