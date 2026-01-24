<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return view('template.default');
});

// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// User Management Routes
Route::resource('users', UserController::class)->middleware('auth');

Route::get('/workshop', [MyController::class, 'index']);
Route::post('/workshop/store', [MyController::class, 'store'])->name('workshop.store');

Route::resource('/flights', App\Http\Controllers\FlightsController::class);

Route::resource('/pokedexs', App\Http\Controllers\PokedexController::class);


