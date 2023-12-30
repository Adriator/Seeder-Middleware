<!-- resources/views/seleccion_modo.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Modo</title>
</head>
<body>
    
    <h1>Selecciona tu modo</h1>

    <!-- Formulario para el modo de administrador -->
    <form action="" method="get">
        @csrf 
        <input type="hidden" name="modo" value="admin"> <!-- Campo oculto para enviar el modo de administrador -->
        <button type="submit">Modo Admin</button> <!-- Botón para enviar el formulario -->
    </form>

    <!-- Formulario para el modo de usuario -->
    <form action="" method="get">
        @csrf 
        <input type="hidden" name="modo" value="usuario"> <!-- Campo oculto para enviar el modo de usuario -->
        <button type="submit">Modo Usuario</button> <!-- Botón para enviar el formulario -->
    </form>
</body>
</html>
