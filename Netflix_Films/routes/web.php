<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieControllerController;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('/Movies/index');
// });


Route::get('/Movies/create', [MovieControllerController::class, 'create'])->Name('movie');


// redirect van moviecontroller
Route::get('/Movies/{index}', [MovieControllerController::class, 'show'])->Name('MovieIndex');



Route::get('/Movies/{index}/edit', [MovieControllerController::class, 'edit'])->Name('movies.edit');


Route::get('/', [MovieControllerController::class, 'index'])->Name('movies.index');
// Route::get('/Movies', [MovieControllerController::class, 'index'])->Name('movies.index2');


Route::post('/', [MovieControllerController::class, 'store'])->Name('movies.store');

Route::put('/', [MovieControllerController::class, 'update'])->Name('movies.update');

Route::get('/Movies/{index}/delete', [MovieControllerController::class, 'destroy'])->Name('movies.destroy');
