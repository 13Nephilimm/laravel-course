<?php

use App\Http\Controllers\BikeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(BikeController::class)->group(function () {
    Route::get('/bike', 'index');
});
