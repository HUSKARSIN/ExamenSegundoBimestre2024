<!-- resources/views/muebles/create.blade.php -->
@extends('layouts.app')

@section('title', 'Crear Mueble')

@section('content')
    <h1>Crear Nuevo Mueble</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('muebles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label>Material:</label>
            <input type="text" name="material" class="form-control">
        </div>
        <div class="form-group">
            <label>Precio:</label>
            <input type="text" name="precio" class="form-control">
        </div>
        <div class="form-group">
            <label>Imagen:</label>
            <input type="file" name="imagen" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection

