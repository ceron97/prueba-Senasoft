@extends('adminlte::page')
@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content')
    @if ( session('mensaje') )
        <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif
    <form action="{{ route('bodega.store') }}">
        <div class="card">
            <div class="card-header">
                <h3>Adicionar un nuevo producto:</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group">    
                            <h4>Proveedor:</h4>
                            <input name="proveedor" class="ml-4" type="text" name="proveedor" id="myFruit" list="mySuggestion">
                            <datalist id="mySuggestion">
                                @foreach ($productos as $item)
                                    <option>{{$item->proveedor}}</option>
                                @endforeach
                            </datalist>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group">    
                            <h4>Nombre del producto:</h4>
                            <input name="nombre" type="text" class="form-control ml-4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            
                        </div>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group">    
                            <h4>Precio por unidad:</h4>
                            <input name="precio" type="text" class="form-control ml-4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                
                        </div>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group">    
                            <h4>Años de garantia:</h4>
                            <input name="fecha_garantia" type="number" min="0" class="form-control ml-4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                
                        </div>
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group">    
                            <h4>Codigo:</h4>
                            <input name="codigo" type="text" class="form-control ml-4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                
                        </div>
                      </div>
                    </div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">
	        		Adicionar
	        	</button>
            </div>
        </div>
    </form>

@stop