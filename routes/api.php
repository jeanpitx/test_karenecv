<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//controllers
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PersonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/orders', [OrderController::class,'all'])->name('orders.all');
Route::get('/persons', [PersonController::class,'all'])->name('persons.all');