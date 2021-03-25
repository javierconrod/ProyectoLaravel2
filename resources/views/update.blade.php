    @extends('layout')
    @section('content')
    <div class="container">

      <h2>EDITAR REGISTROS</h2>

          <form method="POST" action="{{ url("productos/{$productos->id}/editar") }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="" class="form-label">Código</label>
              <input id="codigo" name="codigo" type="text" class="form-control" value="{{ $productos->codigo }}" required>    
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Descripción</label>
              <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{ $productos->descripcion }}" required> 
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Cantidad</label>
              <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{ $productos->cantidad }}" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Precio</label>
              <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{ $productos->precio }}" required>
            </div>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </form>
        


    </div>
    @endsection