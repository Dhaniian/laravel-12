<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;


Route::get('/', function () {
    return view('layouts.login');
});
Route::get('/dokter', function () {
    return view('layouts/list-dokter');
});
// Public routes
Route::get('/', function () {
    return view('layouts.login');
});
Route::get('/login', [AuthController::class, 'form'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes for dokter
Route::middleware(['auth','role:dokter'])->group(function () {
    Route::get('/obat', [ObatController::class, 'index'])->name('obat.index');
    Route::get('/obat/{id}/edit', [ObatController::class, 'edit'])->name('obat.edit');
    Route::put('/obat/{id}', [ObatController::class, 'update'])->name('obat.update');
    Route::post('/obat', [ObatController::class, 'store'])->name('obat.store');
    Route::get('/obat/create', [ObatController::class, 'create'])->name('obat.create');
    Route::delete('/obat/{id}', [ObatController::class, 'destroy'])->name('obat.destroy');
    // Doctor can also see doctor listing
    Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.dokter-view');
});

// Protected routes for pasien
Route::middleware(['auth','role:pasien'])->group(function () {
    Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');
});