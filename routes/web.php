<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterDashboardController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriksaController;


Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/pasien-dashboard', [PasienController::class, 'dashboardPasien'])->middleware('auth')->name('pasien.dashboard');
Route::get('/pasien-periksa', [PasienController::class, 'index'])->middleware('auth')->name('pasien.index');
Route::post('/periksa/store', [PasienController::class, 'store'])->name('periksa.store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dokter-dashboard', [DokterDashboardController::class, 'index'])->middleware('auth')->name('dashboard-dokter');
Route::get('/riwayat-periksa', [PeriksaController::class, 'riwayat'])->name('riwayat-periksa');

