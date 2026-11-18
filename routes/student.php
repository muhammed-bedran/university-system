<?php

use App\Http\Controllers\Student\DashboardController;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix' => 'student',
    'as' => 'student.',
    'middleware' => ['auth:student']
],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});