<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Games;
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

<<<<<<< HEAD
Route::get('/', [Games::class, 'list']);

Route::get('/upload', function () {
    return view('upload');
});
=======
Route::get('/games', '\App\Http\Controllers\GameController@games');

Route::get('/games/{id}', '\App\Http\Controllers\GameController@game');
>>>>>>> 9408acc4603b7079935b577d3715a32089d1e3db

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
