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

    @yield('nosotros1')

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