<!-- resources/views/pokemons/ver.blade.php -->

<!-- Encabezado de la página -->
<h1>Listado de Pokémon</h1>

<!-- Tabla para mostrar la información de los Pokémon -->
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Tamaño</th>
            <th>Peso</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($pokemons as $pokemon)
            <!-- Fila de la tabla para cada Pokémon en $pokemons -->
            <tr>
                <!-- Columnas con información específica del Pokémon -->
                <td>{{ $pokemon->id }}</td>
                <td>{{ $pokemon->nombre }}</td>
                <td>{{ $pokemon->tipo }}</td>
                <td>{{ $pokemon->tamano }}</td>
                <td>{{ $pokemon->peso }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
