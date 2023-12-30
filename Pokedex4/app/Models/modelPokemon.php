<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelPokemon extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada al modelo en la base de datos
    protected $table = 'pokemons';
    
    // Atributos que pueden ser llenados masivamente a través de create y update
    protected $fillable = ['nombre', 'tipo', 'tamano', 'peso'];
}

