<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;

// Route Mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// Route Kalkulator Segitiga (Wajib ada GET dan POST)
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga']);