<!-- resources/views/equipos/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Editar Equipo</title>
</head>
<body>
    <h1>Editar Equipo</h1>
    <form action="{{ route('equipos.update', $equipo) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $equipo->nombre }}">
        <label for="estadio">Estadio:</label>
        <input type="text" name="estadio" id="estadio" value="{{ $equipo->estadio }}">
        <label for="aforo">Aforo:</label>
        <input type="number" name="aforo" id="aforo" value="{{ $equipo->aforo }}">
        <label for="anio">Año de Fundación:</label>
        <input type="number" name="anio" id="anio" value="{{ $equipo->anio }}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
