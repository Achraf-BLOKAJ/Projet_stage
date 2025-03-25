<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommercialsController;
use App\Http\Controllers\TechniciensController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRole;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('clients', ClientsController::class);
// Route::resource('commercials', CommercialsController::class);
// Route::resource('techniciens', TechniciensController::class);
// php

// Routes pour les admins
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('clients', ClientsController::class);
    Route::resource('commercials', CommercialsController::class);
    Route::resource('techniciens', TechniciensController::class);

});


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');




// Routes pour les commercials
Route::middleware(['auth', 'role:commercial'])->group(function () {
    Route::resource('clients', ClientsController::class);
    
});

// Routes pour les techniciens
Route::middleware(['auth', 'role:technicien'])->group(function () {
    Route::resource('techniciens', TechniciensController::class)->only(['index']);
});


Route::get('/localisation', [App\Http\Controllers\MapController::class, 'index'])->name('localisation');



Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');