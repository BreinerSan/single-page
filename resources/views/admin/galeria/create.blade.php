@extends('layouts.admin')

@section('titulo', 'Subir Imagenes a la galeria')

@section('contenido')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Subir Imagen
				</div>
				<div class="card-body">
					<form action="{{ route('galeria.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
	                        <label class="col-md-3 form-control-label" for="cat_imagen">Selecciona una imagen</label>
	                        <div class="col-md-9">
	                            <input type="file" id="imagen" name="imagen"  class="form-control-file" placeholder="Imagen">
	                        </div>
	                    </div>
	                    <div class="form-group">
							<button type="submit" class="btn btn-sm btn-primary">Guardar</button>
						</div>
					</form>
				</div>
			</div>
		</div>	
	</div>
@endsection