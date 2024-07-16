<!-- resources/views/jugadores/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Añadir Jugador</title>
</head>
<body>
    <h1>Añadir Jugador</h1>
    <form action="{{ route('jugadores.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="posicion">Posición:</label>
        <input type="text" name="posicion" id="posicion">
        <label for="fecha_nac">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nac" id="fecha_nac">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
