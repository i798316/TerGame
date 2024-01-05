<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\FormController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [GameController::class, 'listOnOffer']);

Route::get('/games', [GameController::class, 'listAll']);
Route::get('/lastgames', [GameController::class, 'listLast']);
Route::get('/gamesSearch', [GameController::class, 'gameSearch']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/upload', [FormController::class, 'showUploadForm']);
    Route::post('/uploadGame', [GameController::class, 'uploadGame']);
});
