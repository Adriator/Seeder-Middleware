<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorPokemon;

Route::resource('pokemons', controladorPokemon::class);

Route::get('/', function () {
    return view('pokemons.seleccion_modo');
});
    /*Admin*/ 
    Route::get('/index',[controladorPokemon::class,'index'])
    ->name('pokemons.index');
    /*Usuario*/ 
    Route::get('/ver',[controladorPokemon::class,'show'])
    ->name('pokemons.show');
