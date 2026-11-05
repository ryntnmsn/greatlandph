<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InquiryController as AdminInquiryController;
use App\Http\Controllers\Admin\PropertyEvaluationController as AdminPropertyEvaluationController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PropertyEvaluationController;

Route::get('/', function (Request $request) {
    $requestedLocale = $request->query('lang');

    if (in_array($requestedLocale, ['bisaya', 'en'], true)) {
        session(['locale' => $requestedLocale]);
    }

    App::setLocale(session('locale', 'bisaya'));

    return view('home');
})->name('home');

Route::post('/inquiries', [InquiryController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('inquiries.store');

Route::get('/additional-details-form', function () {
    return view('additional-details-form');
})->name('additional-details-form');

Route::post('/additional-details-form', [PropertyEvaluationController::class, 'store'])
    ->middleware('throttle:3,1')
    ->name('additional-details-form.store');

Route::prefix('admin')->name('admin.')->group(function (): void {
    Route::middleware('guest')->group(function (): void {
        Route::get('/login', [AdminAuthController::class, 'create'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'store'])
            ->middleware('throttle:5,1')
            ->name('login.store');
    });

    Route::middleware(['auth', 'admin'])->group(function (): void {
        Route::get('/', DashboardController::class)->name('dashboard');
        Route::get('/property-evaluations', [AdminPropertyEvaluationController::class, 'index'])
            ->name('property-evaluations.index');
        Route::delete('/property-evaluations/{propertyEvaluation}', [AdminPropertyEvaluationController::class, 'destroy'])
            ->name('property-evaluations.destroy');
        Route::delete('/inquiries/{inquiry}', [AdminInquiryController::class, 'destroy'])
            ->name('inquiries.destroy');
        Route::post('/logout', [AdminAuthController::class, 'destroy'])->name('logout');
    });
});
