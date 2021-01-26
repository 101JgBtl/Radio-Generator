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

Route::get('/imprint', fn() => view('imprint'))->name('imprint');
Route::get('/', [\App\Http\Controllers\FrequencyController::class, 'index']);
Route::post('/', [\App\Http\Controllers\FrequencyController::class, 'store'])->name('store');
Route::get('/{frequency:uuid}', [\App\Http\Controllers\FrequencyController::class, 'show'])->name('show');
