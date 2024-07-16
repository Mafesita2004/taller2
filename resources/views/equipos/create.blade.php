<!-- resources/views/equipos/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Añadir Equipo</title>
</head>
<body>
    <h1>Añadir Equipo</h1>
    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="estadio">Estadio:</label>
        <input type="text" name="estadio" id="estadio">
        <label for="aforo">Aforo:</label>
        <input type="number" name="aforo" id="aforo">
        <label for="anio">Año de Fundación:</label>
        <input type="number" name="anio" id="anio">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
