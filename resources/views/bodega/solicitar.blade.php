@extends('adminlte::page')
@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content')
  <div class="card">
    {{-- formulario para solicitar producto  --}}
    <form action="{{route('solicitar.store')}}" method="POST">
      @csrf
      <div class="card-header">
        <h3>Solicitar Productos</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-3">
            <label class="mb-2">Seleciona el Codigo del Producto: </label>
            <select class="custom-select custom-select-md mb-2 col-sm-4" name="id_producto">
              @foreach ($producto as $item => $datos)
                @if ($datos->id_empresa == $datosUser[0]->id_empresa)
                  <option value="{{$datos->id}}" >{{$datos->codigo}}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="col-md-3">
            <label class="mb-2">Cantidad del Producto: </label>
            <input type="number" min="0" class="form-control col-md-8"  name="cantidad_producto" value="" required="">
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label class="mb-2">Seleciona tu bodega: </label>
            </div>
            <select class="custom-select custom-select-md mb-2 col-sm-4" name="codigo_bodega">
              @foreach ($bodega as $item => $datos)
                @if ($bodega[$item]->id_empresa == $datosUser[0]->id_empresa)
                  <option value="{{$datos->codigo}}" >{{$datos->codigo}}</option>
                @endif
              @endforeach
            </select>
          </div>

          <input type="number" hidden name="id_usuario" value="{{ $datosUser[0]->id }}">

          <div class="col-md-3">
            <label class="mb-2">Seleciona el Proveedor del Producto: </label>
            <select class="custom-select custom-select-md mb-2 col-sm-4" name="id_proveedor">
              @foreach ($provedor as $item => $datos)
                @if ($provedor[$item]->id_empresa == $datosUser[0]->id_empresa)
                  <option value="{{$datos->id}}" >{{$datos->nombre}}</option>
                @endif
              @endforeach
            </select>
          </div>

          <input type="number" hidden name="id_empresa" value="{{ $datosUser[0]->id_empresa }}">

        </div>
      </div>
      <div class="card-footer text-center">
        <button type="submit" class="btn btn-primary col-md-2">Solicitar</button>
      </div>
    </form>
  </div>

@stop
@section('js')
    @if (session('mensaje'))
        <script>
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '{{ session('mensaje') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif

@stop