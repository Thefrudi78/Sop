<?php

use App\Http\Controllers\gameController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [dashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/game/{id}', [gameController::class, 'index'])
    ->name('game');