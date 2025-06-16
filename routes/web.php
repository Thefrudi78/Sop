<?php

use App\Http\Controllers\gameController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\SmashorPassController;
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

Route::get('/question', function () {
    return view('questionnaire.question');
})->name('question');

Route::get('/game/{id}/questionnaire/start', [SmashorPassController::class, 'start'])->name('questionnaire.start');
Route::get('/game/{id}/questionnaire', [SmashorPassController::class, 'show'])->name('questionnaire.show');
Route::post('/game/{id}/questionnaire', [SmashorPassController::class, 'answer'])->name('questionnaire.answer');
Route::get('/game/{id}/questionnaire/complete', [SmashorPassController::class, 'complete'])->name('questionnaire.complete');
