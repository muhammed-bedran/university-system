<?php

use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\TwoFactorAuthenticationController;
use Illuminate\Support\Facades\Route;
use Melbedran\Multira\Facades\Multira;

Multira::routes(function () {

    Route::group([
        'prefix' => 'student',
        'as' => 'student.',
        'middleware' => ['auth:student']
    ], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/2fa', [TwoFactorAuthenticationController::class, 'index'])->name('two-factor-auth.index');
    });
});
