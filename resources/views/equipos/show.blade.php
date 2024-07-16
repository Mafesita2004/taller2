<!-- resources/views/equipos/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Equipo</title>
</head>
<body>
    <h1>{{ $equipo->nombre }}</h1>
    <p>Estadio: {{ $equipo->estadio }}</p>
    <p>Aforo: {{ $equipo->aforo }}</p>
    <p>Año de Fundación: {{ $equipo->anio }}</p>
    <a href="{{ route('equipos.index') }}">Volver a la lista</a>
</body>
</html>
