@extends('adminlte::page')
@section('title', 'Bodega')

@section('plugins.Sweetalert2', true)
    

@section('content_header')
    <h1>Bodega</h1>
@stop

@section('content')

    <div class="card">
        <table class="table">
            <thead class="thead-dark ">
            <tr class="center">
                <th scope="col">nombre</th>
                <th scope="col">descripcion</th>
                <th scope="col">precio</th>
                <th scope="col">cantidad</th>
                <th scope="col">garantia</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($productos as $item)
                    <tr>
                        <th scope="row">{{$item->nombre}}</th>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->precio}}</td>
                        <td>{{$item->cantidad}}</td>
                        <td>{{$item->fecha_garantia}}</td>
                        <td>
                                <a href="{{route('bodega.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            {{-- se utliza el metodo de eliminar         --}}
                            <form action="{{route('bodega.destroy', $item->id)}}" class="d-inline" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Formulario para crear producto  -->
    <div id="CrearSucursal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear nueva sucursal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('bodega.store') }}"  class="" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <input type="number" min="0" name="nombre" class="form-control" value="" placeholder="Escribe el nombre del nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" name="descripcion" class="form-control" value="" placeholder="Escribe la descripcion">
                        </div>
                        <div class="form-group">
                            <input type="number" min="0" name="cantidad" value="" class="form-control" placeholder="Escribe la cantidad">
                        </div>
                        <div class="form-group">
                            <input type="number" name="precio" min="0" value="" class="form-control" placeholder="Escribe el precio">
                        </div>
                        <div class="form-group">
                            <input type="number" min="0" name="codigo" value="" class="form-control" placeholder="Escribe el codigo del producto">
                        </div>
    
                        {{-- <div class="form-group">
                            <select class="form-control" name="id_empresa" id="sel1" required>
                                @foreach ($empresa as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div> --}}

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Registrar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
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