<!-- resources/views/muebles/show.blade.php -->
@extends('layouts.app')

@section('title', 'Ver Mueble')

@section('content')
    <h1>Detalles del Mueble</h1>
    <p><strong>Nombre:</strong> {{ $mueble->nombre }}</p>
    <p><strong>Material:</strong> {{ $mueble->material }}</p>
    <p><strong>Precio:</strong> {{ $mueble->precio }}</p>
    <p><strong>Imagen:</strong> <img src="{{ asset('images/' . $mueble->imagen) }}" alt="{{ $mueble->nombre }}" width="200"></p>
    <a class="btn btn-secondary" href="{{ route('muebles.index') }}">Volver a la lista</a>
@endsection
