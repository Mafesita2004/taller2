<!-- resources/views/jugadores/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Jugadores</title>
</head>
<body>
    <h1>Lista de Jugadores</h1>
    <a href="{{ route('jugadores.create') }}">Añadir Jugador</a>
    <ul>
        @foreach ($jugadores as $jugador)
            <li>
                <a href="{{ route('jugadores.show', $jugador) }}">{{ $jugador->nombre }}</a>
                <a href="{{ route('jugadores.edit', $jugador) }}">Editar</a>
                <form action="{{ route('jugadores.destroy', $jugador) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
