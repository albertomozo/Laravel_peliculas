<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\PeliculaBuscarController;
use App\Http\Controllers\PelisCambiarCampo;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* Route::get('/peliculas', function () {S
    return view('peliculas');
})->name('peliculas'); */
/* Route::get('/peliculas/cambiarCampo/{id}/{campo}/{valor}',[PelisCambiarCampo::class,'show'])->name('peliculas.cambiarCampo');*/
Route::get('/peliculas/cambiarCampo/{id}/{campo}/{valor}',[PeliculasController::class,'cambiar'])->name('peliculas.cambiarCampo');

Route::get('/peliculas',[PeliculasController::class,'index'])->name('peliculas');
Route::get('/peliculas/{id}',[PeliculasController::class,'show'])->name('peliculas.show');
Route::get('/peliculas/edit/{id}',[PeliculasController::class,'edit'])->name('peliculas.edit');
Route::POST('/peliculas/create',[PeliculasController::class,'create'])->name('peliculas.create');
Route::delete('/peliculas/{id}',[PeliculasController::class,'destroy'])->name('peliculas.destroy');
Route::post('/peliculasbuscar',[PeliculaBuscarController::class,'store'])->name('peliculas.peliculas-buscar');
Route::get('/peliculasbuscar/{id}',[PeliculaBuscarController::class,'show'])->name('peliculas.peliculas-tmdb');
Route::get('/peliculasbuscar',[PeliculasController::class,'index'])->name('peliculas'); // ecitar error al altualizar pagina en navegador
Route::get('/peliculas/confirm/{id}/{titulo}',[PeliculasController::class,'confirm'])->name('peliculas.confirm');
Route::put('/peliculas/update/{id}', [PeliculasController::class,'update'])->name('peliculas.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
