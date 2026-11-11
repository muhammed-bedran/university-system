<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DepartmentsController;
use App\Http\Controllers\Dashboard\FacultiesController;
use App\Http\Controllers\Dashboard\StudentsController;
use Illuminate\Support\Facades\Route;



// Route::group([],function(){});
Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'middleware' =>['auth:web']
], function () {
    // Faculties Routes
    Route::get('/faculties',[FacultiesController::class,'index'])->name('faculties.index');
    Route::get('/faculties/create',[FacultiesController::class,'create'])->name('faculties.create');
    Route::post('/faculties',[FacultiesController::class,'store'])->name('faculties.store');
    Route::get('/faculties/{id}/edit',[FacultiesController::class,'edit'])->name('faculties.edit');
    Route::put('/faculties/{id}',[FacultiesController::class,'update'])->name('faculties.update');
    Route::delete('/faculties/{id}',[FacultiesController::class,'destroy'])->name('faculties.destroy');
    Route::get('/faculties/{id}',[FacultiesController::class,'show'])->name('faculties.show');

    // Departments Routes

    Route::get('/departments',[DepartmentsController::class,'index'])->name('departments.index');
    Route::get('/departments/create',[DepartmentsController::class,'create'])->name('departments.create');
    Route::post('/departments',[DepartmentsController::class,'store'])->name('departments.store');
    Route::get('/departments/{id}/edit',[DepartmentsController::class,'edit'])->name('departments.edit');
    Route::put('/departments/{id}',[DepartmentsController::class,'update'])->name('departments.update');
    Route::delete('/departments/{id}',[DepartmentsController::class,'destroy'])->name('departments.destroy');
    Route::get('/departments/{id}',[DepartmentsController::class,'show'])->name('departments.show');


















    // Students Routes

    Route::get('/index', [DashboardController::class, 'index'])->name('index');
    Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
    Route::get('students/create',[StudentsController::class,'create'])->name('students.create');
    Route::post('/students', [StudentsController::class, 'store'])->name('students.store');
    Route::get('/students/{id}/edit', [StudentsController::class, 'edit'])->name('students.edit');
    Route::put('/students/{id}', [StudentsController::class, 'update'])->name('students.update');
    Route::delete('/students/{id}', [StudentsController::class, 'destroy'])->name('students.destroy');
    Route::get('/students/{id}', [StudentsController::class, 'show'])->name('students.show');
});
