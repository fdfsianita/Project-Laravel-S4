<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\UserAkses;
use App\Http\Middleware\Authenticate;
use App\Http\Kernel;


// Route::middleware(['guest'])->group(function(){

    Route::get('/', [HomeController::class,"home"]);
    Route::get('/about', [HomeController::class,"about"]);
    Route::get('/testi', [HomeController::class,"testi"]);
    Route::get('/con', [HomeController::class,"contact"]);
    Route::get('/login', [HomeController::class,"login"])->name('login');
    Route::post('/login', [HomeController::class,"signin"]);
    Route::get('/register', [HomeController::class,"register"]);
    Route::post('/create', [HomeController::class,"create"]);
// });

// Route::middleware(['islogin'])->group(function(){
    Route::get('/client', [ClientController::class, "client"])->middleware('auth');
    Route::get('/company', [ClientController::class, "company"])->middleware('auth');
    Route::get('/logout', [HomeController::class, "logout"]);

// });

