<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\rolesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/products', ProductController::class);
Route::resource('/',PersonController::class);
Route::resource('/roles',rolesController::class);