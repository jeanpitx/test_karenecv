<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
//controllers
use App\Http\Controllers\PersonController;
use App\Http\Controllers\OrderController;

/**
 * Requires o requerimientos de archivos y rutas manejadas a nivel externo
 */
require __DIR__.'/auth.php';


/**
 * Rutas privadas a continuación
 */
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth'])->name('dashboard');


/**
 * Rutas publicas a continuación
 */
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
});

/**
 * Resources
 */
Route::resource('persons', PersonController::class);
Route::resource('orders', OrderController::class);