@extends('layouts.admin')

@section('titulo', 'Registrar una nueva card en Nosotros')

@section('contenido')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Formulario de registro
				</div>
				<div class="card-body">
					<form action="{{ route('nosotros.store') }}" method="POST">
						@csrf
						@include('admin.InfoNosotros.partials.form')
					</form>
				</div>
			</div>
		</div>	
	</div>
@endsection