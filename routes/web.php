<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

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

Route::resource('pokemons', PokemonController::class);

Route::get('/fetch-pokemon', [PokemonController::class, 'fetchPokemon']);

Route::get('/search-pokemon', [PokemonController::class, 'searchPokemon'])->name('search-pokemon');