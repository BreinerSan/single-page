@extends('layouts.mi_layout')

@section('carousel')

	<!-- Main Carousel Section -->
  	<div id="carousel-area">
       	<div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
	        
          	<div class="carousel-inner" role="listbox">

	            <div class="carousel-item active">
	            	<img class="carousel-image" src="img/slider/bg-1.jpg" alt="">
	              	<div class="carousel-caption text-left">
	                	<h3 class="wow fadeInRight" data-wow-delay="0.2s">{{ $info->web_subtitulo }}</h1>  
	                	<h2 class="wow fadeInRight" data-wow-delay="0.4s">{{ $info->web_titulo }}</h2>
	                	<h4 class="wow fadeInRight" data-wow-delay="0.6s">{{ $info->web_subti_dos }}</h4>
	                	
	              	</div>
            	</div>
	            
          	</div>
        	
        </div>
  	</div>  

@endsection

@section('galeria')
	<!-- Portfolio Section -->
  	<section id="portfolios" class="section">
 	 <!-- Container Starts -->
	  	<div class="container">
	        <div class="section-header">          
	          <h2 class="section-title">Nuestros Trabajos</h2>
	          <span>Trabajos</span>
	          <p class="section-subtitle"></p>
	        </div>

	        <!-- Portfolio Recent Projects -->
	        <div id="portfolio" class="row">
	        	@foreach($images as $image)
	        		<div class="col-lg-4 col-md-6 col-xs-12 mix development print">
		            <div class="portfolio-item">
		              <div class="shot-item">
		                <img src="{{ asset('img/galeria/'.$image->ima_name) }}" alt="" />  
		                <div class="single-content">
		                  <div class="fancy-table">
		                    <div class="table-cell">
		                      <div class="zoom-icon">
		                        <a class="lightbox" href="{{ asset('img/galeria/'.$image->ima_name) }}"><i class="lni-zoom-in item-icon"></i></a>
		                      </div>
		                      <a href="#">Ver Proyecto</a>
		                    </div>
		                  </div>
		                </div>
		              </div>               
		            </div>
		        </div>
	        	@endforeach
	        </div>
	  	</div>
  	<!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 
@endsection


@section('nosotros1')
  <!-- Services Section Start -->
    <section id="services" class="section">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Sobre Nosotros</h2>
            <span>Nosotros</span>
            <p class="section-subtitle"></p>
          </div>
          <div class="row">
            @foreach($cards as $card)

              <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="{{ 'icon color-'.rand( 1 , 6 ) }}">
                  <i class="{{ $card->nos_logo }}"></i>
                </div>
                <h4>{{ $card->nos_titulo }}</h4>
                <p>{{ $card->nos_descripcion }}</p>
              </div>
            </div>

            @endforeach
            
          </div>
        </div>
    </section>
    <!-- Services Section End -->
@endsection

@section('nosotros')
	<!-- Features Section Start -->
    <section id="features" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">MISION Y VISION</h2>
          <span>MISION Y VISION</span>
          <p class="section-subtitle"></p>
        </div>
        <div class="row">
          <!-- Start featured -->
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-layout"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-layout"></i></div>
                <h4>MISION</h4>
                <p>{{ $info->web_mision }}</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-tab"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-tab"></i></div>
                <h4>VISION</h4>
                <p>{{ $info->web_vision }}</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          
        </div>
      </div>
    </section>
    <!-- Features Section End -->    
@endsection

@section('contactanos')
  <!-- Contact Section Start -->
    <section id="contact" class="section">      
        <div class="contact-form">
          <div class="container">
            <div class="section-header">          
              <h2 class="section-title">Contactanos</h2>
              <span>Contactanos</span>
              <p class="section-subtitle"></p>
            </div>
            <div class="row">          
              <div class="col-lg-9 col-md-9 col-xs-12">
                <div class="contact-block">
                  <form id="contactForm" action="{{ route('contactus.store') }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Por favor escribe tu nombre">
                          <div class="help-block with-errors"></div>
                        </div>                                 
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Por favor escribe tu correo electronico">
                          <div class="help-block with-errors"></div>
                        </div> 
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" placeholder="Subject" id="msg_subject" name="subject" class="form-control" required data-error="Por favor escribe el asunto">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="7" data-error="Escribe tu mensaje" required></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="submit-button">
                          <button class="btn btn-common btn-effect" id="submit" type="submit">Enviar Mensaje</button>
                          <div id="msgSubmit" class="h3 hidden"></div> 
                          <div class="clearfix"></div> 
                        </div>
                      </div>
                    </div>            
                  </form>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-xs-12">
                <div class="contact-deatils">
                  <!-- Content Info -->
                  <div class="contact-info_area">
                    <div class="contact-info">
                      <i class="lni-map"></i>
                      <h5>Direccion</h5>
                      <p>{{ $info->web_direccion }}</p>
                    </div>
                    <!-- Content Info -->
                    <div class="contact-info">
                      <i class="lni-star"></i>
                      <h5>Correo</h5>
                      <p>{{ $info->web_correo }}</p>
                    </div>
                    <!-- Content Info -->
                    <div class="contact-info">
                      <i class="lni-phone"></i>
                      <h5>Telefono</h5>
                      <p>{{ $info->web_telefono }}</p>
                    </div>
                    <!-- Icon -->
                    <ul class="footer-social">
                      <li><a class="facebook" href="{{ $info->web_facebook }}" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                      <li><a class="twitter" href="{{ $info->web_twiter }}" target="_blank"><i class="lni-twitter-filled"></i></a></li>
                      <li><a class="linkedin" href="{{ $info->web_instagram }}" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                      <li><a class="google-plus" href="{{ $info->web_google }}" target="_blank"><i class="lni-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
         </div>
        </div>            
    </section>
    <!-- Contact Section End -->
@endsection

