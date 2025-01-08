<?php

use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\faqController;
use App\Http\Controllers\admin\informasiLayananController;
use App\Http\Controllers\admin\profileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('theme.default.pages.landing.index');
});

// DAHSBOARD
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');

    Route::get('layanan', [informasiLayananController::class, 'index'])->name('layanan');  
    Route::get('layanan/{id_layanan}', [dashboardController::class, 'layanan'])->name('dashboard.detail_layanan');


    Route::get('profile', [profileController::class, 'index']);
    Route::get('faq', [faqController::class, 'index']);
});
