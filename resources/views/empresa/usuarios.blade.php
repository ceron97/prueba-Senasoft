@extends('adminlte::page')
@section('title', 'admin')

@section('plugins.Sweetalert2', true)
    
@section('content_header')
    <h1>Usuarios es</h1>
@stop

@section('content')
    <button type="button" class="btn btn-info btn-lg mb-3" data-toggle="modal" data-target="#modalNew">Agregar usuario</button>

    <table class="table text-center">
        <thead class="thead-dark ">
          <tr class="center">
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
    			<tr>
                    <th scope="row">{{ $user->name }}</th>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->direccion }}</td>
                    <td>{{ $user->telefono }}</td>
                    <td>{{ $user->rol }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEdit"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
                    <h4 class="modal-title">Agregar usuario</h4>
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
			        		<label>Correo:</label>
			        		<div class="input-group">
			        			<input type="mail" class="form-control input-lg" name="nit" placeholder="Numero" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Dirección:</label>
			        		<div class="input-group">
			        			<input type="mail" class="form-control input-lg" name="nit" placeholder="Numero" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Telefono:</label>
			        		<div class="input-group">
			        			<input type="mail" class="form-control input-lg" name="nit" placeholder="Numero" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Rol:</label>
			        		<div class="input-group">
			        			<select class="form-control input-lg select2bs4" name="rol" required="">
			        				<option value="">
			        					Seleccionar un rol
			        				</option>
			        				<option value="">
			        					Administrador
			        				</option>
			        				<option value="">
			        					Invitado
			        				</option>
		        				</select>
		        				
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-users"></i>
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
                    <h4 class="modal-title">Editar usuario</h4>
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
			        		<label>Correo:</label>
			        		<div class="input-group">
			        			<input type="mail" class="form-control input-lg" name="nit" placeholder="Numero" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Dirección:</label>
			        		<div class="input-group">
			        			<input type="mail" class="form-control input-lg" name="nit" placeholder="Numero" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Telefono:</label>
			        		<div class="input-group">
			        			<input type="mail" class="form-control input-lg" name="nit" placeholder="Numero" required="" min="0">
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-user"></i>
					            	</div> 
					            </div>
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<label>Rol:</label>
			        		<div class="input-group">
			        			<select class="form-control input-lg select2bs4" name="rol" required="">
			        				<option value="">
			        					Seleccionar un rol
			        				</option>
			        				<option value="">
			        					Administrador
			        				</option>
			        				<option value="">
			        					Invitado
			        				</option>
		        				</select>
		        				
			        			<div class="input-group-append">
					            	<div class="input-group-text">
					                	<i class="fas fa-users"></i>
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