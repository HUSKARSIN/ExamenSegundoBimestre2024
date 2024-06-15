<!DOCTYPE html>
<html>
<head>
    <title>Muebles</title>
</head>
<body>
    <h1>Lista de Muebles</h1>
    <a href="{{ route('muebles.create') }}">Crear Nuevo Mueble</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <ul>
        @foreach ($muebles as $mueble)
            <li>
                {{ $mueble->nombre }} - {{ $mueble->material }} - {{ $mueble->precio }}
                <a href="{{ route('muebles.show', $mueble->id) }}">Ver</a>
                <a href="{{ route('muebles.edit', $mueble->id) }}">Editar</a>
                <form action="{{ route('muebles.destroy', $mueble->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
