<!-- resources/views/muebles/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Mueble')

@section('content')
    <h1>Editar Mueble</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('muebles.update', $mueble->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $mueble->nombre }}">
        </div>
        <div class="form-group">
            <label>Material:</label>
            <input type="text" name="material" class="form-control" value="{{ $mueble->material }}">
        </div>
        <div class="form-group">
            <label>Precio:</label>
            <input type="text" name="precio" class="form-control" value="{{ $mueble->precio }}">
        </div>
        <div class="form-group">
            <label>Imagen:</label>
            <input type="file" name="imagen" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
