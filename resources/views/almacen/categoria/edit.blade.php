@extends('layouts.admin')
@section('content')

<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Editar Categoria {{$categoria->categoria}}</h3>
    </div>
    <form action="{{route('categoria.update',$categoria->id_categoria)}}" method="post" class="form">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="categora">Nombre</label>
          <input type="text" class="form-control" name="categoria" id="categoria" value="{{$categoria->categoria}}" placeholder="Ingrese el nombre de la categoria">
        </div>
        <div class="form-group">
          <label for="descripcion">Material</label>
          <input type="text" class="form-control" name="descripcion" id="descripcion"  value="{{$categoria->descripcion}}" placeholder="Ingrese la descripcion">
        </div>
        <div class="form-group">
          <label for="precio">Precio</label>
          <input type="text" class="form-control" name="precio" id="descripcion"  value="{{$categoria->precio}}" placeholder="Ingrese el precio">
        </div>
        <div class="form-group">
          <label for="imagen">Imagen</label>
          <input type="text" class="form-control" name="imagen" id="descripcion"  value="{{$categoria->imagen}}" placeholder="Ingrese la imagen">
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-success me-1 mb-1"> Guardar</button>
          <button type="reset" class="btn btn-danger me-1 mb-1"> Cancelar</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection