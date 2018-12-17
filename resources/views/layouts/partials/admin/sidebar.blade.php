<nav class="col-md-2 d-none d-md-block bg-light sidebar">
	<div class="sidebar-sticky">
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link active" href="{{ url('/admin') }}">
					<span data-feather="home"></span>
					Dashboard <span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('admin/info') }}">
					<span data-feather="file"></span>
					Datos de la pagina web
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('admin/galeria') }}">
					<span data-feather="shopping-cart"></span>
					Gestion de Galeria
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('admin/nosotros') }}">
					<span data-feather="users"></span>
					Gestion datos Nosotros
				</a>
			</li>
			
		</ul>

	</div>
</nav>