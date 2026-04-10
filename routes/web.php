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

Route::get('/logout', [AuthController::class, 'logout']);