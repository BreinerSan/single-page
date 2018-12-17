@extends('layouts.admin')

@section('titulo', 'Gestiona la información de la página en cards en la vista de Sobre Nosotros')

@section('contenido')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Lista 
					<a href="{{ route('nosotros.create') }}" class="btn btn-primary float-right">Crear</a>
				</div>
				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">ID</th>
								<th>Logo</th>
								<th>Titulo</th>
								<th>descripción</th>
								<th colspan="3">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($cards as $card)
							<tr>
								<td>{{ $card->id }}</td>
								<td>{{ $card->nos_logo }}</td>
								<td>{{ $card->nos_titulo }}</td>
								<td>{{ $card->nos_descripcion }}</td>
								<td width="10px">
									<a href="{{ route('nosotros.show', $card->id) }}" class="btn btn-sm btn-secondary">Ver</a>
								</td>
								<td width="10px">
									<a href="{{ route('nosotros.edit', $card->id) }}" class="btn btn-sm btn-warning">Editar</a>
								</td>
								<td width="10px">
									<form action="{{ route('nosotros.destroy', $card->id) }}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										@csrf
										<button class="btn btn-sm btn-danger">Eliminar</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
		</div>	
	</div>
@endsection