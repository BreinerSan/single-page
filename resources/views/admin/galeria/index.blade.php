@extends('layouts.admin')

@section('titulo', 'Gestiona de las imágenes de la galería de la página web')

@section('contenido')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Lista de Imágenes
					<a href="{{ route('galeria.create') }}" class="btn btn-primary float-right">Crear</a>
				</div>
				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">ID</th>
								<th>Nombre</th>
								<th>Imagen</th>
								<th colspan="3">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($images as $image)
							<tr>
								<td>{{ $image->id }}</td>
								<td>{{ $image->ima_name }}</td>
								<td><img src="{{asset('img/galeria/'.$image->ima_name)}}" alt="galeria" width="100px" height="50"></td>
								<td width="10px">
									<form action="{{ route('galeria.destroy', $image->id) }}" method="POST">
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