<!-- resources/views/pokemons/create.blade.php -->

<!-- Encabezado principal -->
<h1>Crear Pokémon</h1>

<!-- Formulario para crear un nuevo Pokémon -->
<form action="{{ route('pokemons.store') }}" method="post">
    @csrf <!-- Directiva de Blade para incluir el token CSRF -->

    <!-- Campo para ingresar el nombre del Pokémon -->
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>

    <!-- Campo para seleccionar el tipo del Pokémon -->
    <div class="form-group">
        <label for="tipo">Tipo:</label>
        <select name="tipo" class="form-control" required>
            <!-- Opciones para los diferentes tipos de Pokémon -->
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

    <!-- Campo para seleccionar el tamaño del Pokémon -->
    <div class="form-group">
        <label for="tamano">Tamaño:</label>
        <select name="tamano" class="form-control" required>
            <!-- Opciones para los diferentes tamaños de Pokémon -->
            <option value="pequeño">Pequeño</option>
            <option value="mediano">Mediano</option>
            <option value="grande">Grande</option>
        </select>
    </div>

    <!-- Campo para ingresar el peso del Pokémon -->
    <div class="form-group">
        <label for="peso">Peso:</label>
        <input type="number" name="peso" step="0.01" class="form-control" required>
    </div>

    <!-- Botón para enviar el formulario y guardar el Pokémon -->
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
