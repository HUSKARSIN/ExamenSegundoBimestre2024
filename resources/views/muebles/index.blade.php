<!-- resources/views/muebles/index.blade.php -->
@extends('layouts.app')

@section('title', 'Lista de Muebles')

@section('content')
    <h1>Lista de Muebles</h1>
    <a class="btn btn-primary mb-3" href="{{ route('muebles.create') }}">Crear Nuevo Mueble</a>
    @if ($muebles->isEmpty())
        <p>No hay muebles disponibles.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Material</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($muebles as $mueble)
                    <tr>
                        <td>{{ $mueble->nombre }}</td>
                        <td>{{ $mueble->material }}</td>
                        <td>{{ $mueble->precio }}</td>
                        <td><img src="{{ asset('images/' . $mueble->imagen) }}" alt="{{ $mueble->nombre }}" width="100"></td>
                        <td>
                            <a class="btn btn-info" href="{{ route('muebles.show', $mueble->id) }}">Ver</a>
                            <a class="btn btn-warning" href="{{ route('muebles.edit', $mueble->id) }}">Editar</a>
                            <form action="{{ route('muebles.destroy', $mueble->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
