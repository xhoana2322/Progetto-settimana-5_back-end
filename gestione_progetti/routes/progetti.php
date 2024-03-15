<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgettoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttivitaController;

Route::resource('/', ProgettoController::class);
Route::resource('/users', UserController::class);
Route::resource('/attivita', AttivitaController::class);
