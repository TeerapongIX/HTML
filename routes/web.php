<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return view('template.default');
});

use App\Http\Controllers\MyController;

Route::get('/workshop', [MyController::class, 'index']);
Route::post('/workshop/store', [MyController::class, 'store'])->name('workshop.store');
