<?php

use App\Http\Controllers\PeliculasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::name('index.peliculas')->get('peliculas', [PeliculasController::class, 'index']);

Route::name('read.peliculas')->get('peliculas/{peliculas}', [PeliculasController::class, 'show']);

Route::get('pelicula/{peliculas}', [PeliculasController::class, 'edit']);

Route::name('update.peliculas')->post('pelicula/{peliculas}', [PeliculasController::class, 'update']);

Route::name('delete.peliculas')->delete('pelicula/{peliculas}', [PeliculasController::class, 'delete']);
