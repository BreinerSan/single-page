@extends('layouts.admin')

@section('titulo', 'Gestiona la informacion de la pagina en cards en la vista de Sobre Nosotros')

@section('contenido')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Buzon de mensajes 
				</div>
				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">ID</th>
								<th>Nombre</th>
								<th>Email</th>
								<th>Asunto</th>
								<th>Fecha de registro</th>
								<th colspan="3">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($mails as $mail)
							<tr>
								<td>{{ $mail->id }}</td>
								<td>{{ $mail->name }}</td>
								<td>{{ $mail->email }}</td>
								<td>{{ $mail->subject }}</td>
								<td>{{ $mail->created_at }}</td>
								<td width="10px">
									<a href="{{ route('mensajes.show', $mail->id) }}" class="btn btn-sm btn-secondary">Ver</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $mails->render() }}
				</div>
			</div>
		</div>	
	</div>
@endsection