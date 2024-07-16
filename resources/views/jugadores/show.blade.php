<!-- resources/views/jugadores/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Jugador</title>
</head>
<body>
    <h1>{{ $jugador->nombre }}</h1>
    <p>Posición: {{ $jugador->posicion }}</p>
    <p>Fecha de Nacimiento: {{ $jugador->fecha_nac }}</p>
    <a href="{{ route('jugadores.index') }}">Volver a la lista</a>
</body>
</html>
