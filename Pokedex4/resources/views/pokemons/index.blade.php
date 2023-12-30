<!-- resources/views/pokemons/index.blade.php -->

<!-- Encabezado principal -->
<h1>Listado de Pokémon</h1>

<!-- Enlace para crear un nuevo Pokémon -->
<a href="{{ route('pokemons.create') }}" class="btn btn-primary">Crear Pokémon</a>

<!-- Tabla para mostrar la información de los Pokémon -->
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Tamaño</th>
            <th>Peso</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <!-- Ciclo que recorre la lista de Pokémon y muestra sus detalles -->
        @foreach ($pokemons as $pokemon)
            <tr>
                <!-- Columnas de la tabla con los detalles de cada Pokémon -->
                <td>{{ $pokemon->id }}</td>
                <td>{{ $pokemon->nombre }}</td>
                <td>{{ $pokemon->tipo }}</td>
                <td>{{ $pokemon->tamano }}</td>
                <td>{{ $pokemon->peso }}</td>
                <td>
                    <!-- Enlace para editar el Pokémon -->
                    <a href="{{ route('pokemons.edit', $pokemon->id) }}" class="btn btn-warning">Editar</a>

                    <!-- Formulario para eliminar el Pokémon -->
                    <form action="{{ route('pokemons.destroy', $pokemon->id) }}" method="post" style="display:inline;">
                        @csrf 
                        @method('DELETE') 
                        <!-- Botón de eliminación con confirmación -->
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
