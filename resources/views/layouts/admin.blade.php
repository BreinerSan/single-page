<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<title>Panel de Administracion</title>
	
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- Custom styles for this template -->
    <link href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">

</head>
<body class="bg-light">
	
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
		<a class="navbar-brand mr-auto mr-lg-0" href="{{ url('/admin') }}">Panel de administración</a>
		<button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ url('/admin') }}">Dashboard <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/') }}">Ir a la web</a>
				</li>
			</ul>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
					<div class="dropdown-menu" aria-labelledby="dropdown01">
						<a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
					</div>
				</li>
			</ul>
		</div>
    </nav>

    

	<div class="container-fluid">
		<div class="row">

			@include('layouts.partials.admin.sidebar')

    		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		
				<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
					<img class="mr-3" src="../../assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
					<div class="lh-100">
						<h6 class="mb-0 text-white lh-100">@yield('titulo')</h6>
						<small></small>
					</div>
				</div>

				@if(session('info'))
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-10 offset-md-1">
	                            <div class="alert alert-success">
	                                {{ session('info') }}
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            @endif

	            @if(count($errors))
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-10 offset-md-1">
	                            <div class="alert alert-danger">
	                                @foreach($errors->all() as $error)
	                                    <li>{{ $error }}</li>
	                                @endforeach
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            @endif

				@yield('contenido')

    		</main>

    	</div>
    </div>
	
	<!--Scripts-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script>
		$(function () {
		  'use strict'

		  $('[data-toggle="offcanvas"]').on('click', function () {
		    $('.offcanvas-collapse').toggleClass('open')
		  })
		})
	</script>

	 <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>