<!-- resources/views/pokemons/edit.blade.php -->

<!-- Encabezado principal -->
<h1>Editar Pokémon</h1>

<!-- Formulario de edición del Pokémon -->
<form action="{{ route('pokemons.update', $pokemon->id) }}" method="POST">
    @csrf 
    @method('PUT')

    <!-- Campo de entrada para el nombre del Pokémon -->
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre', $pokemon->nombre) }}" class="form-control" required>
    </div>

    <!-- Menú desplegable para seleccionar el tipo del Pokémon -->
    <div class="form-group">
        <label for="tipo">Tipo:</label>
        <select name="tipo" class="form-control" required>
            <!-- Opciones para diferentes tipos de Pokémon -->
            <option value="Acero">Acero</option>
            <option value="Volador">Volador</option>
            <option value="Agua">Agua</option>
            <option value="Hielo">Hielo</option>
            <option value="Planta">Planta</option>
            <option value="Bicho">Bicho</option>
            <option value="Electrico">Electrico</option>
            <option value="Normal">Normal</option>
            <option value="Roca">Roca</option>
            <option value="Tierra">Tierra</option>
            <option value="Fuego">Fuego</option>
            <option value="Lucha">Lucha</option>
            <option value="Hada">Hada</option>
            <option value="Psiquico">Psiquico</option>
            <option value="Veneno">Veneno</option>
            <option value="Dragon">Dragon</option>
            <option value="Fantasma">Fantasma</option>
            <option value="Siniestro">Siniestro</option>
        </select>
    </div>

    <!-- Menú desplegable para seleccionar el tamaño del Pokémon -->
    <div class="form-group">
        <label for="tamano">Tamaño:</label>
        <select name="tamano" class="form-control" required>
            <option value="pequeño">Pequeño</option>
            <option value="mediano">Mediano</option>
            <option value="grande">Grande</option>
        </select>
    </div>

    <!-- Campo de entrada para el peso del Pokémon -->
    <div class="form-group">
        <label for="peso">Peso:</label>
        <input type="number" name="peso" value="{{ old('peso', $pokemon->peso) }}" class="form-control" required>
    </div>

    <!-- Botón de envío del formulario -->
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
