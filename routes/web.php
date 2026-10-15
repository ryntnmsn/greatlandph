<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\InquiryController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/inquiries', [InquiryController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('inquiries.store');

Route::prefix('admin')->name('admin.')->group(function (): void {
    Route::middleware('guest')->group(function (): void {
        Route::get('/login', [AdminAuthController::class, 'create'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'store'])
            ->middleware('throttle:5,1')
            ->name('login.store');
    });

    Route::middleware(['auth', 'admin'])->group(function (): void {
        Route::get('/', DashboardController::class)->name('dashboard');
        Route::post('/logout', [AdminAuthController::class, 'destroy'])->name('logout');
    });
});
