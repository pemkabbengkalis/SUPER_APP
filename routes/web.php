<?php

use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\faqController;
use App\Http\Controllers\admin\informasiLayananController;
use App\Http\Controllers\admin\profileController;
use App\Http\Controllers\auth\{loginController,logoutController,registerController};
use App\Http\Middleware\AuthSessionMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('theme.default.pages.landing.index');
});

Route::prefix('auth')->group(function () {
    Route::get('login', [loginController::class, 'index'])->name('login');
    Route::post('login', [loginController::class, 'login']);
    Route::get('logout', [logoutController::class, 'logout'])->name('logout');

    Route::get('register', [registerController::class, 'index'])->name('register');
    Route::post('register', [registerController::class, 'store']);
});

// DAHSBOARD
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');

    Route::get('layanan', [informasiLayananController::class, 'index'])->name('layanan');
    Route::get('layanan-detail', [informasiLayananController::class, 'detail'])->name('dashboard.detail_layanan');
    Route::get('layanan/layanan-publik', [informasiLayananController::class, 'layananpublik'])->name('layananpublik');
    Route::get('layanan/cctv', [informasiLayananController::class, 'cctv']);
    Route::get('layanan/{slug}', [informasiLayananController::class, 'detail_layanan'])->name('detail');

    Route::get('profile', [profileController::class, 'index']);
    Route::get('faq', [faqController::class, 'index']);
})->middleware(AuthSessionMiddleware::class);
