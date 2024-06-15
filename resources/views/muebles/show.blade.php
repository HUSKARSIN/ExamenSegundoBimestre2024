<!DOCTYPE html>
<html>
<head>
    <title>Ver Mueble</title>
</head>
<body>
    <h1>Detalles del Mueble</h1>
    <p>Nombre: {{ $mueble->nombre }}</p>
    <p>Material: {{ $mueble->material }}</p>
    <p>Precio: {{ $mueble->precio }}</p>
    <p>Imagen: <img src="{{ asset('images/' . $mueble->imagen) }}" alt="{{ $mueble->nombre }}"></p>
    <a href="{{ route('muebles.index') }}">Volver a la lista</a>
</body>
</html>

