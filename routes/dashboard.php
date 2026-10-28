<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\StudentsController;
use Illuminate\Support\Facades\Route;



// Route::group([],function(){});
Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'middleware' =>['auth:web']
], function () {
    Route::get('/index', [DashboardController::class, 'index'])->name('index');
    Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
    Route::get('students/create',[StudentsController::class,'create'])->name('students.create');
    Route::post('/students', [StudentsController::class, 'store'])->name('students.store');
    Route::get('/students/{id}/edit', [StudentsController::class, 'edit'])->name('students.edit');
    Route::put('/students/{id}', [StudentsController::class, 'update'])->name('students.update');
    Route::delete('/students/{id}', [StudentsController::class, 'destroy'])->name('students.destroy');
    Route::get('/students/{id}', [StudentsController::class, 'show'])->name('students.show');
});
