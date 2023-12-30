<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SeederPokemon extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definición de tipos de Pokémon
        $tipo = ['Acero', 'Volador', 'Agua', 'Hielo', 'Planta', 'Bicho', 'Electrico', 'Normal', 'Roca', 'Tierra', 'Fuego', 'Lucha', 'Hada', 'Psiquico', 'Veneno', 'Dragon', 'Fantasma', 'Siniestro'];
        
        // Definición de tamaños de Pokémon
        $tamano = ['pequeño', 'mediano', 'grande'];

        // Lista de nombres de Pokémon
        $pokemons = [
            'Bulbasaur', 'Ivysaur', 'Venusaur', 'Charmander', 'Charmeleon', 'Charizard',
            'Squirtle', 'Wartortle', 'Blastoise', 'Caterpie', 'Metapod', 'Butterfree',
            'Weedle', 'Kakuna', 'Beedrill', 'Pidgey', 'Pidgeotto', 'Pidgeot', 'Rattata',
            'Raticate', 'Spearow', 'Fearow', 'Ekans', 'Arbok', 'Pikachu', 'Raichu',
            'Sandshrew', 'Sandslash', 'Latios', 'Latias', 'Mew', 'Mewtwo',
            'Nidorino', 'Nidoking', 'Clefairy', 'Clefable', 'Vulpix', 'Ninetales'
        ];

        // Insertar 5 registros aleatorios en la tabla 'pokemons'
        for ($i = 1; $i <= 5; $i++) {
            DB::table('pokemons')->insert([
                'id' => '0', 
                'nombre' => $pokemons[array_rand($pokemons)],
                'tipo' => $tipo[array_rand($tipo)],
                'tamano' => $tamano[array_rand($tamano)],
                'peso' => rand(1, 100000) + (rand(1, 9) / 10),
            ]);
        }
    }
}
