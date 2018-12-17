@extends('layouts.admin')

@section('titulo', 'Ver Mensaje')

@section('contenido')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Ver
				</div>
				<div class="card-body">
					<div class="form-group">
					    <label class="col-md-3 form-control-label" for="nos_logo"><strong>Fecha</strong></label>
					    <div class="col-md-9">
					        <p>{{ $mail->created_at }}</p>
					    </div>
					</div>

					<div class="form-group">
					    <label class="col-md-3 form-control-label" for="nos_titulo"><strong>Nombre</strong></label>
					    <div class="col-md-9">
					        <p>{{ $mail->name }}</p>
					    </div>
					</div>

					<div class="form-group">
					    <label class="col-md-3 form-control-label" for="nos_descripcion"><strong>Email</strong></label>
					    <div class="col-md-9">
					        <p>{{ $mail->email }}</p>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 form-control-label" for="nos_descripcion"><strong>Asunto</strong></label>
					    <div class="col-md-9">
					        <p>{{ $mail->subject }}</p>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 form-control-label" for="nos_descripcion"><strong>Mensaje</strong></label>
					    <div class="col-md-9">
					        <p>{{ $mail->message }}</p>
					    </div>
					</div>
				</div>
			</div>
		</div>	
	</div>
@endsection