@extends('adminlte::page')
@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content')

  {{-- formulario para solicitar producto  --}}
<form action="{{route('solicitar.store')}}" method="POST">
      @csrf
      <div class="card">
        <div class="card-header">
          <h3>Solicitar Productos</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <form action="" method="post">
              <div class="col-md-3">
                <label class="mb-2">Seleciona el Proveedor de: </label>
                <select class="custom-select custom-select-md mb-2 col-sm-4" name="nombre_proveedor">
                  @foreach ($provedor as $item)
                    <option value="{{$item->id}}" >{{$item->nombre}}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-md-3">
                <label class="mb-2">Seleciona el Producto: </label>
                <select class="custom-select custom-select-md mb-2 col-sm-4" name="nombre_producto">
                  @foreach ($producto as $item)
                    <option value="{{$item->id}}" >{{$item->nombre}}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-md-3">
                <label class="mb-2">Cantidad del Producto: </label>
                <input type="number" min="0" class="form-control col-md-8"  name="cantidad" value="">
              </div>

            </form>
          </div>
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