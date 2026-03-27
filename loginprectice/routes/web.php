<?php


use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return view('home');
    });
    Route::resource('/blogs',BlogsController::class );
});

Route::get('/login',[AuthenticatedSessionController::class,'create']);
Route::post('/login',[AuthenticatedSessionController::class,'store'])->name('login');
Route::get('/register', [RegisteredUserController::class,'create']);
Route::post('/register', [RegisteredUserController::class,'store'])->name('register');

Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');


