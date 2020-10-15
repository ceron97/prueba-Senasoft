@extends('adminlte::page')
@section('title', 'admin')

@section('plugins.Sweetalert2', true)
    
@section('content_header')
    <h1>Empresas</h1>
@stop

@section('content')
    <button type="button" class="btn btn-info btn-lg mb-3" data-toggle="modal" data-target="#modalNew">Agregar empresa</button>

    <table class="table text-center">
        <thead class="thead-dark ">
          <tr class="center">
            <th scope="col">Empresa</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nit</th>
            <th scope="col">Acciones</th>
            <th scope="col">Empresario</th>
          </tr>
        </thead>
        <tbody>
        	@foreach ($table as $datos)
        		<tr>
                    <th scope="row">{{ $datos->id }}</th>
                    <td>{{ $datos->nombre }}</td>
                    <td>{{ $datos->nit_empresa }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEdit"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                    <td>
                		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalEditUser"><i class="fas fa-users"></i></button>
                    </td>
                </tr>
        	@endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div id="modalNew" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear empresa</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
			        <div class="card-body">
			        	<div class="form-group">
		        			<label>Nombre:</label>
			        		<div class="input-group">
			        			<input type="text" class="form-control input-lg" name="empresa" placeholder="Empresa" required="">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Nit:</label>
			        		<div class="input-group">
			        			<input type="number" class="form-control input-lg" name="nit" placeholder="Numero" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>
		      		</div>
		      	</div>

		      	<h4 class="ml-3">Datos usuario</h4>

		      	<div class="modal-body">
                    <div class="card-body">
			        	<div class="form-group">
		        			<label>Nombre:</label>
			        		<div class="input-group">
			        			<input type="text" class="form-control input-lg" name="empresa" placeholder="Usuario" required="">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Correo:</label>
			        		<div class="input-group">
			        			<input type="number" class="form-control input-lg" name="correo" placeholder="Correo" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Contraseña:</label>
			        		<div class="input-group">
			        			<input type="number" class="form-control input-lg" name="contraseña" placeholder="Contraseña" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>
		      		</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modalEdit" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar empresa</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
			        	<div class="form-group">
		        			<label>Nombre:</label>
			        		<div class="input-group">
			        			<input type="text" class="form-control input-lg" name="empresa" placeholder="Empresa" required="">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Nit:</label>
			        		<div class="input-group">
			        			<input type="number" class="form-control input-lg" name="nit" placeholder="Numero" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>
		      		</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalEditUser" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar usuario</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
			        	<div class="form-group">
		        			<label>Nombre:</label>
			        		<div class="input-group">
			        			<input type="text" class="form-control input-lg" name="empresa" placeholder="Usuario" required="">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Correo:</label>
			        		<div class="input-group">
			        			<input type="number" class="form-control input-lg" name="correo" placeholder="Correo" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Contraseña:</label>
			        		<div class="input-group">
			        			<input type="number" class="form-control input-lg" name="contraseña" placeholder="Contraseña" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>
		      		</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@stop