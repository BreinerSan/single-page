<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
	<title>CAPITAL HUMANO</title>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/line-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nivo-lightbox.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/color-switcher.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/menu_sideslide.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">    
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css">
</head>
<body>
	<!-- Header Section Start -->
    <header id="slider-area">  
      	<nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
	        <div class="container">          
	          <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
	          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	            <i class="lni-menu"></i>
	          </button>
	          <div class="collapse navbar-collapse" id="navbarCollapse">
	            <ul class="navbar-nav mr-auto w-100 justify-content-end">
	              <li class="nav-item">
	                <a class="nav-link page-scroll" href="#slider-area">Inicio</a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link page-scroll" href="#portfolios">Trabajos</a>
	              </li>   
	              <li class="nav-item">
	                <a class="nav-link page-scroll" href="#services">Nosotros</a>
	              </li> 
	              <li class="nav-item">
	                <a class="nav-link page-scroll" href="#features">Mision y Vision</a>
	              </li>                                      
	              <li class="nav-item">
	                <a class="nav-link page-scroll" href="#contact">Contactanos</a>
	              </li> 
	            </ul>              
	          </div>
	        </div>
      	</nav> 

      	@yield('carousel')

    </header>
    <!-- Header Section End --> 

    @yield('galeria')

    <!-- Services Section Start -->
    <section id="services" class="section">
      	<div class="container">
	        <div class="section-header">          
	          <h2 class="section-title">Sobre Nosotros</h2>
	          <span>Nosotros</span>
	          <p class="section-subtitle"></p>
	        </div>
	        <div class="row">
	          <div class="col-lg-4 col-md-6 col-xs-12">
	            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
	              <div class="icon color-1">
	                <i class="lni-pencil"></i>
	              </div>
	              <h4></h4>
	              <p>Organismo privado sin ánimo de lucro, de carácter no gubernamental, la cual se constituye con el fin de mejorar las condiciones y la calidad de vida de los habitantes de Ocaña y su región.</p>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 col-xs-12">
	            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
	              <div class="icon color-2">
	                <i class="lni-cog"></i>
	              </div>
	              <h4></h4>
	              <p>estimulando un desarrollo económico y social a través de la formulación y ejecución de proyectos de tipo cultural, recreativo, Tecnológico, deportivo, agropecuario, ambiental, educativo, en salud y social.</p>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 col-xs-12">
	            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
	              <div class="icon color-3">
	                <i class="lni-stats-up"></i>
	              </div>
	              <h4></h4>
	              <p>Capital Humano es una asociación inscrita en cámara de comercio el 26 de marzo de 2004 bajo el número 1044 del libro I, de personas jurídicas sin ánimo de lucro, obteniendo la personería jurídica No 1044 del 6 de abril del 2004, con NIT. No 807009223-4, siendo importante destacar que cada uno de sus miembros</p>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 col-xs-12">
	            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.8s">
	              <div class="icon color-4">
	                <i class="lni-layers"></i>
	              </div>
	              <h4></h4>
	              <p>cuenta con amplia experiencia en sus perfiles profesionales, liderazgo comunitario y ejecución de proyectos encaminados al mejoramiento del bienestar social de las comunidades menos favorecidas tanto del sector rural como urbano de la región.</p>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 col-xs-12">
	            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1s">
	              <div class="icon color-5">
	                <i class="lni-tab"></i>
	              </div>
	              <h4></h4>
	              <p>La Asociación para el  Desarrollo de Ocaña y su Región “CAPITAL HUMANO”, cuenta con los organismos administrativos y contables que se requieren para su correcto funcionamiento; </p>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 col-xs-12">
	            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1.2s">
	              <div class="icon color-6">
	                <i class="lni-briefcase"></i>
	              </div>
	              <h4></h4>
	              <p>Dentro del grupo de asociados se cuentan con profesionales en las carreras de Ingeniería de Sistemas, Administración de Empresas, Tecnología Agropecuaria y Zootecnía, Ingeniería Ambiental, Contaduría, los cuales fortalecen la organización y cuentan con herramientas y experiencia que permite la gestión, el desarrollo y la ejecución de proyectos de relevancia para la región  y el país en general.</p>
	            </div>
	          </div>
	        </div>
      	</div>
    </section>
    <!-- Services Section End -->

    @yield('nosotros')

    @yield('contactanos')

	<!-- Footer Section Start -->
    <footer>
    	<!-- Footer Area Start -->
      	<section class="footer-Content">
	        <div class="container">
	          <div class="row">
	            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
	              <h3>{{ $info->web_titulo }}</h3>
	              <div class="textwidget">
	                <p>{{ $info->web_subti_dos }}</p>
	              </div>
	              <ul class="footer-social">
	                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
	                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
	                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
	                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
	              </ul> 
	            </div>
	            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
	              <div class="widget">
	                <h3 class="block-title">Links </h3>
	                <ul class="menu">
	                  <li><a href="#slider-area">Inicio</a></li>
		              <li><a href="#portfolios">Trabajos</a></li>   
		              <li><a href="#services">Nosotros</a></li> 
		              <li><a href="#features">Mision y Vision</a></li>                                      
		              <li><a href="#contact">Contactanos</a></li> 
	                </ul>
	              </div>
	            </div>
	            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
	              <div class="widget">
	                <h3 class="block-title">Contactanos</h3>
	                <ul class="contact-footer">
	                  <li>
	                    <strong>Direccion :</strong> <span>{{ $info->web_direccion }}</span>
	                  </li>
	                  <li>
	                    <strong>Telefono :</strong> <span>{{ $info->web_telefono }}</span>
	                  </li>
	                  <li>
	                    <strong>Correo :</strong> <span><a href="#">{{ $info->web_correo }}</a></span>
	                  </li>
	                </ul> 
	              </div>
	            </div>
	            
	          </div>
	        </div>
      	</section>
      	<!-- Footer area End -->
      
      	<!-- Copyright Start  -->
      	<div id="copyright">
	        <div class="container">
	          <div class="row">
	            <div class="col-md-12">
	              <div class="site-info float-left">
	                <p>Creado por <a href="#" rel="nofollow"></a></p>
	              </div>              
	              <div class="float-right">  
	                <ul class="nav nav-inline">
	                  <li class="nav-item">
	                    <a class="nav-link active" href="#">About</a>
	                  </li>
	                  <li class="nav-item">
	                    <a class="nav-link" href="#">Return Policy</a>
	                  </li>
	                  <li class="nav-item">
	                    <a class="nav-link" href="#">FAQ</a>
	                  </li>
	                  <li class="nav-item">
	                    <a class="nav-link" href="#">Contact</a>
	                  </li>
	                </ul>
	              </div>
	            </div>
	          </div>
	        </div>
      	</div>
      	<!-- Copyright End -->

    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      	<i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
    </div>    
	
	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('js/jquery-min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/color-switcher.js') }}"></script>
    <script src="{{ asset('js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>    
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>    
    <script src="{{ asset('js/jquery.nav.js') }}"></script>    
    <script src="{{ asset('js/scrolling-nav.js') }}"></script>    
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>     
    <script src="{{ asset('js/wow.js') }}"></script> 
    <script src="{{ asset('js/jquery.vide.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>    
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>    
    <script src="{{ asset('js/waypoints.min.js') }}"></script>    
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>   
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>