<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommercialsController;
use App\Http\Controllers\TechniciensController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('clients', ClientsController::class);
Route::resource('commercials', CommercialsController::class);
Route::resource('techniciens', TechniciensController::class);



Route::get('/localisation', [App\Http\Controllers\MapController::class, 'index'])->name('localisation');