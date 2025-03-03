<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hello', [HelloController::class, 'welcome']);

