<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\LaporanController;

use App\Http\Controllers\KeuanganController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('warga', WargaController::class);
    Route::resource('pengumuman', PengumumanController::class)->except(['show']);
    
    // Keuangan
    Route::get('/keuangan/pdf', [KeuanganController::class, 'exportPdf'])->name('keuangan.pdf');
    Route::resource('keuangan', KeuanganController::class)->except(['show']);
    
    // Surat
    Route::resource('surat', SuratController::class)->except(['edit', 'update', 'destroy']);
    Route::post('/surat/{surat}/status', [SuratController::class, 'updateStatus'])->name('surat.updateStatus');
    Route::get('/surat/{surat}/pdf', [SuratController::class, 'cetakPdf'])->name('surat.cetakPdf');

    // Laporan
    Route::resource('laporan', LaporanController::class)->except(['edit', 'update', 'destroy']);
    Route::post('/laporan/{laporan}/status', [LaporanController::class, 'updateStatus'])->name('laporan.updateStatus');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
