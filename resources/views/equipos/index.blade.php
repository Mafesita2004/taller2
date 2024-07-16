<!-- resources/views/equipos/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Equipos</title>
</head>
<body>
    <h1>Lista de Equipos</h1>
    <a href="{{ route('equipos.create') }}">Añadir Equipo</a>
    <ul>
        @foreach ($equipos as $equipo)
            <li>
                <a href="{{ route('equipos.show', $equipo) }}">{{ $equipo->nombre }}</a>
                <a href="{{ route('equipos.edit', $equipo) }}">Editar</a>
                <form action="{{ route('equipos.destroy', $equipo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
