<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CodeController;
use Livewire\Livewire;

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
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/TerGame/TerGame/public/livewire/update', $handle);
});
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/upload', [FormController::class, 'showUploadForm']);
    Route::get('/check', [GameController::class, 'showOwnGames']);
    Route::get('/checkPurchased', [CodeController::class, 'showPurchased']);
    Route::post('/games/{game}/buy', [CodeController::class, 'buy'])->name('buy');
    Route::post('/uploadGame', [GameController::class, 'uploadGame']);
    Route::get('/deleteGame/{game}', [GameController::class, 'deleteGame']);
    Route::get('/games/{game}/comment', [FormController::class, 'showCommentForm'])->name('comment');
    Route::post('/games/{game}/comment/addComment', [CommentController::class, 'addComment'])->name('addComment');
});

Route::get('/', [GameController::class, 'listOnOffer']);

Route::get('/games', [GameController::class, 'listAll']);
Route::get('/lastgames', [GameController::class, 'listLast']);
Route::get('/gamesSearch', [GameController::class, 'gameSearch']);
Route::get('/games/{id}', [GameController::class, 'showGame'])->name('game');
Route::get('/categories', [GameController::class, 'categories']);
Route::get('/categories/{category}', [GameController::class, 'gamesInCategory'])->name('gamesInCategory');
Route::get('/aboutUs', function(){
    return view('aboutUs');
});