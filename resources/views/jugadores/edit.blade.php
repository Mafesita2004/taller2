<!-- resources/views/jugadores/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Editar Jugador</title>
</head>
<body>
    <h1>Editar Jugador</h1>
    <form action="{{ route('jugadores.update', $jugador) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $jugador->nombre }}">
        <label for="posicion">Posición:</label>
        <input type="text" name="posicion" id="posicion" value="{{ $jugador->posicion }}">
        <label for="fecha_nac">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nac" id="fecha_nac" value="{{ $jugador->fecha_nac }}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
