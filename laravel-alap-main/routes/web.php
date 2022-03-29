<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\GaleriaController::class, "index"])->name("galeria.index");
Route::get('/create', [\App\Http\Controllers\GaleriaController::class, "create"])->name("galeria.create");
Route::post('/store', [\App\Http\Controllers\GaleriaController::class, "store"])->name("galeria.store");
