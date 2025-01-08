<?php

use App\Http\Controllers\admin\dashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// DAHSBOARD
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('layanan/{id_layanan}', [dashboardController::class, 'layanan'])->name('dashboard.detail_layanan');
});
