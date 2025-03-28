<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommercialsController;
use App\Http\Controllers\TechniciensController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRole;
use App\Http\Middleware\CommercialMiddleware;
use App\Http\Middleware\TechnicienMiddleware;
use App\Http\Middleware\ClientMiddleware;


// Apply the middleware to the 'techniciens' resource route
Route::middleware(['auth', TechnicienMiddleware::class])->group(function () {
    Route::resource('techniciens', TechniciensController::class);  // Only Techniciens routes will be allowed
});

// You can add the routes for commercial or client access here as needed


Route::middleware(['auth', CommercialMiddleware::class])->group(function () {
    Route::resource('commercials', CommercialsController::class);
});


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', ClientMiddleware::class])->group(function () {
    Route::resource('clients', ClientsController::class);  // Clients can be accessed by all, but only after login
});

// Route::resource('clients', ClientsController::class);
// Route::resource('commercials', CommercialsController::class);
// Route::resource('techniciens', TechniciensController::class);

// Route::middleware(['auth', 'role:commercial'])->group(function () {
//     Route::resource('commercials', CommercialsController::class);
// });


// php

// Routes pour les admins
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::resource('clients', ClientsController::class);
//     Route::resource('commercials', CommercialsController::class);
//     Route::resource('techniciens', TechniciensController::class);

// });






// // Routes pour les commercials
// Route::middleware(['auth', 'role:commercial'])->group(function () {
//     Route::resource('clients', ClientsController::class);
    
// });

// Routes pour les techniciens
// Route::middleware(['auth', 'role:technicien'])->group(function () {
//     // Route::resource('techniciens', TechniciensController::class)->except(['index']);
//     Route::get('techniciens', [TechniciensController::class, 'index'])->name('techniciens.index');
//     Route::get('/techniciens/create', [TechniciensController::class, 'create'])->name('techniciens.create');
//     Route::get('/techniciens/{technicien}', [TechniciensController::class, 'show']);
//     Route::get('/techniciens/{technicien}', [TechniciensController::class, 'show'])->name('techniciens.show');
//     Route::get('/techniciens/{technicien}/edit', [TechniciensController::class, 'edit'])->name('techniciens.edit');
//     Route::delete('/techniciens/{technicien}', [TechniciensController::class, 'destroy'])->name('techniciens.destroy');

//     // Route::get('/techniciens/1',[TechniciensController::class, 'create']);

// });


// Route::middleware(['auth', 'role:technicien'])->group(function () {
//     Route::get('techniciens', [TechniciensController::class, 'index'])->name('techniciens.index');
//     Route::get('/techniciens/create', [TechniciensController::class, 'create'])->name('techniciens.create');

//     // Only show the logged-in technicien's data
//     Route::get('/techniciens/{technicien}', [TechniciensController::class, 'show'])->name('techniciens.show')
//          ->where('technicien', auth()->user()->id); // Restrict by the logged-in user's id

//     Route::get('/techniciens/{technicien}/edit', [TechniciensController::class, 'edit'])->name('techniciens.edit');
//     Route::delete('/techniciens/{technicien}', [TechniciensController::class, 'destroy'])->name('techniciens.destroy');
// });


// Route::middleware(['auth', 'role:technicien'])->group(function () {
//     // Technicien can only view their own profile
//     Route::get('/techniciens/{technicien}', [TechniciensController::class, 'show'])->name('techniciens.show')
//          ->where('technicien', auth()->user()->id); // Ensure they can only view their own data
// });

// Route::middleware(['auth', 'role:technicien'])->group(function () {
//     // Technicien peut uniquement voir son propre profil
//     Route::get('/techniciens/{technicien}', [TechniciensController::class, 'show'])
//          ->name('techniciens.show')
//          ->where('technicien', function() {
//              return auth()->check() ? auth()->user()->id : null;
//          });
// });
// Route::get('/techniciens/{technicien}', [TechniciensController::class, 'show'])
//      ->name('techniciens.show')
//      ->middleware(['auth', 'role:technicien']);
// Route::middleware(['auth', 'role:technicien'])->group(function () {
//     Route::get('/techniciens/{technicien}', [TechniciensController::class, 'show'])
//          ->name('techniciens.show');
// });
// Route::middleware(['auth', 'role:technicien'])->group(function () {
//     Route::get('/techniciens/{technicien}', [TechniciensController::class, 'show'])
//          ->name('techniciens.show')
//          ->where('technicien', '\d+'); // Ensure only numeric IDs
// });

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     // Seul l'admin peut gérer les techniciens (créer, éditer, supprimer)
//     Route::get('techniciens', [TechniciensController::class, 'index'])->name('techniciens.index');
//     Route::get('/techniciens/create', [TechniciensController::class, 'create'])->name('techniciens.create');
//     Route::post('/techniciens', [TechniciensController::class, 'store'])->name('techniciens.store');
//     Route::get('/techniciens/{technicien}/edit', [TechniciensController::class, 'edit'])->name('techniciens.edit');
//     Route::put('/techniciens/{technicien}', [TechniciensController::class, 'update'])->name('techniciens.update');
//     Route::delete('/techniciens/{technicien}', [TechniciensController::class, 'destroy'])->name('techniciens.destroy');
    
// });




// Route::resource('techniciens', TechniciensController::class);



Route::get('/localisation', [App\Http\Controllers\MapController::class, 'index'])->name('localisation');



Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/localisation', [App\Http\Controllers\MapController::class, 'index'])->name('localisation');
