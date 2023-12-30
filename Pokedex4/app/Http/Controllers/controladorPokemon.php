<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelPokemon; 

class controladorPokemon extends Controller
{
    // Método para mostrar todos los pokemons en una vista.
    public function index()
    {
        $pokemons = modelPokemon::all(); // Obtener todos los pokemons usando el modelo.
        return view('pokemons.index', compact('pokemons')); // Renderizar la vista 'pokemons.index' y pasar la información de los pokemons.
    }

    // Método para mostrar todos los pokemons en otra vista (ver).
    public function show()
    {
        $pokemons = modelPokemon::all(); // Obtener todos los pokemons usando el modelo.
        return view('pokemons.ver', compact('pokemons')); // Renderizar la vista 'pokemons.ver' y pasar la información de los pokemons.
    }

    // Método para mostrar el formulario de creación de pokemon.
    public function create()
    {
        return view('pokemons.create'); // Renderizar la vista 'pokemons.create'.
    }

    // Método para almacenar un nuevo pokemon en la base de datos.
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'tamano' => 'required|in:pequeño,mediano,grande',
            'peso' => 'required|numeric',
        ]);

        modelPokemon::create($request->all()); // Crear un nuevo pokemon utilizando los datos del formulario.

        return redirect()->route('pokemons.index'); // Redirigir a la página de índice de pokemons después de almacenar el nuevo pokemon.
    }

    // Método para mostrar el formulario de edición de un pokemon específico.
    public function edit($id)
    {
        $pokemon = modelPokemon::findOrFail($id); // Obtener un pokemon específico por su ID.
        return view('pokemons.edit', compact('pokemon')); // Renderizar la vista 'pokemons.edit' y pasar la información del pokemon.
    }

    // Método para actualizar la información de un pokemon específico en la base de datos.
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'tamano' => 'required|in:pequeño,mediano,grande',
            'peso' => 'required|numeric',
        ]);

        $pokemon = modelPokemon::findOrFail($id); // Obtener el pokemon a actualizar por su ID.
        $pokemon->update($request->all()); // Actualizar la información del pokemon con los datos del formulario.

        return redirect()->route('pokemons.index'); // Redirigir a la página de índice de pokemons después de actualizar el pokemon.
    }

    // Método para eliminar un pokemon específico de la base de datos.
    public function destroy($id)
    {
        $pokemon = modelPokemon::findOrFail($id); // Obtener el pokemon a eliminar por su ID.
        $pokemon->delete(); // Eliminar el pokemon de la base de datos.

        return redirect()->route('pokemons.index'); // Redirigir a la página de índice de pokemons después de eliminar el pokemon.
    }
}
