<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Melbedran\Multira\Facades\Multira;

Multira::routes(function(){

    // Route::get('/', function () {
    //     return view('layouts.website.index');
    // });
    Route::get('/',[HomeController::class,'index']);
});

//require __DIR__.'/auth.php';
require __DIR__ . '/dashboard.php';
require __DIR__ . '/student.php';



// seeder
// database->seeders
