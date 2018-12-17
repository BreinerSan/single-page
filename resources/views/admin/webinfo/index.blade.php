@extends('layouts.admin')

@section('titulo', 'Gestiona los datos Generales de la pagina web')

@section('contenido')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Info general
				</div>
				<div class="card-body">
					<form action="{{ route('info.update', $info->id) }}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="PUT">
						<div class="row">
						    <div class="form-group col-md-6">
						    	<label for="titulo">Titulo h1</label>
						      	<input type="text" name="titulo" class="form-control" placeholder="Obligatorio" value="{{ $info->web_titulo }}">
						    </div>
						    <div class="form-group col-md-6">
						    	<label for="subtitulo">Subtitulo h2</label>
						      <input type="text" name="subtitulo" class="form-control" placeholder="Opcional" value="{{ $info->web_subtitulo }}">
						    </div>
						    <div class="form-group col-md-6">
						    	<label for="subtitulo_2">Subtitulo h3</label>
						      <input type="text" name="subtitulo_2" class="form-control" placeholder="Opcional" value="{{ $info->web_subti_dos }}">
						    </div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
						    	<label for="direccion">Direccion</label>
						      <input type="text" name="direccion" class="form-control" placeholder="Opcional" value="{{ $info->web_direccion }}">
						    </div>
						    <div class="form-group col-md-6">
						    	<label for="telefono">Telefono</label>
						      <input type="text" name="telefono" class="form-control" placeholder="Opcional" value="{{ $info->web_telefono }}">
						    </div>
						    <div class="form-group col-md-6">
						    	<label for="correo">Correo Electronico</label>
						      <input type="text" name="correo" class="form-control" placeholder="Opcional" value="{{ $info->web_correo }}">
						    </div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<h4>Misión y Visión de la empresa</h4>
							</div>
							<div class="form-group col-md-6">
							  <label for="mision">Mision:</label>
							  <textarea class="form-control" rows="5" id="mision" name="mision">{{ $info->web_mision }}</textarea>
							</div>
							<div class="form-group col-md-6">
							  <label for="vision">Vision:</label>
							  <textarea class="form-control" rows="5" id="vision" name="vision">{{ $info->web_vision }}</textarea>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<h4>Redes Sociales</h4>
							</div>
							<div class="form-group col-md-6">
						    	<label for="facebook">Facebook</label>
						      <input type="text" name="facebook" class="form-control" placeholder="Opcional" value="{{ $info->web_facebook }}">
						    </div>
						    <div class="form-group col-md-6">
						    	<label for="twitter">Twitter</label>
						      <input type="text" name="twitter" class="form-control" placeholder="Opcional" value="{{ $info->web_twiter }}">
						    </div>
						    <div class="form-group col-md-6">
						    	<label for="instagram">LinkedIn</label>
						      <input type="text" name="instagram" class="form-control" placeholder="Opcional" value="{{ $info->web_instagram }}">
						    </div>
						    <div class="form-group col-md-6">
						    	<label for="google">Google+</label>
						      <input type="text" name="google" class="form-control" placeholder="Opcional" value="{{ $info->web_google }}">
						    </div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
						</div>

					</form>
				</div>
			</div>

		</div>	
	</div>
@endsection