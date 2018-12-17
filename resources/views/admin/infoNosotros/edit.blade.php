@extends('layouts.admin')

@section('titulo', 'Editar una nueva card en Nosotros')

@section('contenido')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Formulario de registro
				</div>
				<div class="card-body">
					<form action="{{ route('nosotros.update', $card->id) }}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="PUT">
						@include('admin.InfoNosotros.partials.form')
					</form>
				</div>
			</div>
		</div>	
	</div>
@endsection