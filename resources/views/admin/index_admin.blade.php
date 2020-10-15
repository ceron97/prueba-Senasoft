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
            <th scope="col">descripcion</th>
            <th scope="col">telefono</th>
            <th scope="col">Acciones</th>
            <th scope="col">Empresario</th>
          </tr>
        </thead>
        <tbody>
        	@foreach ($table as $datos)
        		<tr>
                    <th scope="row">{{ $datos->name }}</th>
                    <td>{{ $datos->telefono }}</td>
                    <td>{{ $datos->direccion }}     {{ $datos->ciudad }}</td>
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
						<form method="POST" action="{{ route('admin.store') }}">
							@csrf
							<div class="form-group row">
								<label class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
								<div class="col-md-6">
									<input name="name" type="text" class="form-control" value="{{ old('name') }}">
								</div><br>
								<label class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>
								<div class="col-md-6">
									<input name="direccion" type="text" class="form-control" value="{{ old('direccion') }}" required autofocus>
								</div><br>
								<label class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
								<div class="col-md-6">
									<input name="telefono" type="text" class="form-control " value="{{ old('telefono') }}" required autofocus>
								</div>
								<label class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
								<div class="col-md-6">
									<input name="email" type="text" class="form-control " value="{{ old('email') }}" required autofocus>
								</div> 
								<label class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>
								<div class="col-md-6">
									<input name="ciudad" type="text" class="form-control " value="{{ old('ciudad') }}" required autofocus>
								</div>
							</div>

							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
	
								<div class="col-md-6">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
	
									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
	
							<div class="form-group row">
								<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
	
								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Guardar</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</form>
					</div>
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