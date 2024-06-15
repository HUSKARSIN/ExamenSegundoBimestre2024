<!DOCTYPE html>
<html>
<head>
    <title>Editar Mueble</title>
</head>
<body>
    <h1>Editar Mueble</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('muebles.update', $mueble->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $mueble->nombre }}">
        <br>
        <label>Material:</label>
        <input type="text" name="material" value="{{ $mueble->material }}">
        <br>
        <label>Precio:</label>
        <input type="text" name="precio" value="{{ $mueble->precio }}">
        <br>
        <label>Imagen:</label>
        <input type="file" name="imagen">
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>

