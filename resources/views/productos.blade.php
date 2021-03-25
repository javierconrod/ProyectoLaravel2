
@extends('layout')

@section('content')
<div class="container">
        
        <a href="{{ url('create') }}" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Código</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @forelse ($productos as $producto)
      <tr>
          <td>{{ $producto->id}}</td>
          <td>{{ $producto->codigo }}</td>
          <td>{{ $producto->descripcion }}</td>
          <td>{{ $producto->cantidad }} piezas</td>
          <td>$ {{ $producto->precio }}</td>
          <td>
          <form method="POST" action="{{ url("productos/{$producto->id}") }}">
          @csrf 
          @method('DELETE')
            <a href="{{ route('productos.edit', ['id' => $producto->id]) }}" class="btn btn-info">Editar</a>         
                
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>          
          </td>        
      </tr>
    @empty
      <tr>
          <td>No hay producto</td>
          <td>N</td>
          <td>N</td>
          <td>N</td>
          <td>N</td>     
      </tr>
    @endforelse
    
  </tbody>
</table>

    </div>
    @endsection