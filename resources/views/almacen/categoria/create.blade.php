@extends('layouts.admin')
@section('content')
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Nueva Categoria</h3>
    </div>
    <form action="{{ route('categoria.store') }}" method="post" class="form" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="categoria">Nombre</label>
          <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Ingrese el nombre de la categoria">
        </div>
        <div class="form-group">
          <label for="descripcion">Material</label>
          <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese el material">
        </div>
        <div class="form-group">
          <label for="precio">Precio</label>
          <input type="number" step="0.01" class="form-control" name="precio" id="precio" placeholder="Ingrese el precio">
        </div>
        <div class="form-group">
          <label for="imagen">Imagen</label>
          <input type="file" class="form-control" name="imagen" id="imagen">
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-success me-1 mb-1">Guardar</button>
          <button type="reset" class="btn btn-danger me-1 mb-1">Cancelar</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
