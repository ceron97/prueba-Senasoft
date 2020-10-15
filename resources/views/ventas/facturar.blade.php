@extends('adminlte::page')
@section('title', 'Productos')

@section('plugins.Sweetalert2', true)
    

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <form role="form" method="POST" action="{{ route('factura.store') }}">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
                <h5>
                    Por favor llena la cantidad de productos
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($idProducto as $key => $element)
                        <div class="col col-md-3">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="mt-1">{{ $productos[$key]->nombre }}: </label>
                                    <input type="number" class="form-control input-lg ml-4" name="productos[]">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </form>
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