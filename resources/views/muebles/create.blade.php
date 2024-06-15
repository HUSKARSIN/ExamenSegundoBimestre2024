<!DOCTYPE html>
<html>
<head>
    <title>Crear Mueble</title>
</head>
<body>
    <h1>Crear Nuevo Mueble</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('muebles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label>Material:</label>
        <input type="text" name="material">
        <br>
        <label>Precio:</label>
        <input type="text" name="precio">
        <br>
        <label>Imagen:</label>
        <input type="file" name="imagen">
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>

