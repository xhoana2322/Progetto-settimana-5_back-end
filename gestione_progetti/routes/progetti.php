<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgettoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttivitaController;

Route::resource('/progetto', ProgettoController::class);
// Route::resource('/users', UserController::class);
Route::resource('/attivita', AttivitaController::class);

Route::post('/progetto', [ProgettoController::class, 'store'])
    ->name('progetto.store')
    ->middleware('auth');
Route::put('/progetto/{progetto}', [ProgettoController::class, 'update'])
    ->name('progetto.update')
    ->middleware('auth');
