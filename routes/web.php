<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\PeliculaBuscarController;
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
Route::get('/peliculas',[PeliculasController::class,'index'])->name('peliculas');
Route::get('/peliculas/{id}',[PeliculasController::class,'show'])->name('peliculas.show');
Route::post('/peliculasbuscar',[PeliculaBuscarController::class,'store'])->name('peliculas.peliculas-buscar');
Route::get('/peliculasbuscar',[PeliculasController::class,'index'])->name('peliculas'); // ecitar error al altualizar pagina en navegador


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
