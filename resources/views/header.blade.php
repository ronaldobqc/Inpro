<!DOCTYPE html>

<html class="no-js">

<head>
	<title>INPROMAT</title>
	<link rel="icon" href="{{ URL::asset('img/icon.png') }}">
	<link rel="icon" href="{{ URL::asset('img/icon.png') }}">
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/animations.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/fonts.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" class="color-switcher-link">
	<link rel="stylesheet" href="{{ URL::asset('css/shop.css') }}">
	<script src="{{ URL::asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
	<link rel="icon" href="{{ URL::asset('img/icon.png') }}">
</head>

<body>
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			<section class="page_topline ls section_padding_15">
				
			</section>
			<header class="page_header header_white toggler_xs_right section_padding_25">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell"> <a href="{{ route('inicio') }}" class="logo top_logo">
                        <img src="{{ URL::asset('images/logo.png') }}" alt="">
                    </a> </div>
							<div class="header_mainmenu display_table_cell text-center">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active"> <a href="{{ route('inicio') }}">Inicio</a>
										</li>
										<li> <a href="{{ route('nosotros') }}">Acerca de Nosotros</a>
											
										</li>
										<!-- eof pages -->
										<li> <a href="#">Productos</a>
											<ul>
												<li> <a href="{{ route('plasticos.get') }}">Plasticos</a> </li>
												<li> <a href="{{ route('plasticos.get') }}">Importaciones</a> </li>
												<li> <a href="{{ route('plasticos.get') }}">Moldes</a> </li>
											</ul>
										</li>
										
										<!-- eof features -->
										<!-- blog -->
										<li> <a href="{{ route('noticias.get') }}">Noticias</a>
										</li>
										<!-- eof blog -->
										<!-- contacts -->
										<li> <a href="{{ route('contact') }}">Contáctanos</a>
											
										</li>
										<!-- eof contacts -->
										<!-- contacts -->
										@guest
										<li> <a href="{{ route('login') }}">Login</a>
										</li>
										@else
										<li> <a href="#">Admin</a>
											<ul>
												<li> <a href="{{ route('plasticos.getAll') }}">Publicar Producto</a> </li>
												<li> <a href="{{ route('noticias.getAll') }}">Publicar Noticia</a> </li>
												<li> <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> </li>
											</ul>
										</li>
										@endguest
										<!-- eof contacts -->

									</ul>
								</nav>

								<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none">
               				     @csrf
            					</form>
								<!-- eof main nav -->
								<!-- header toggler --><span class="toggle_menu"><span></span></span>
							</div>
						</div>
					</div>
				</div>
			</header>




            @yield('contenido')


            <footer class="page_footer parallax ds ms section_padding_50 columns_padding_25" id="contact">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6"> <a href="{{ route('inicio') }}" class="logo top_logo">
                    <img src="{{ URL::asset('images/logo-light.png')}}" alt="">
                </a>
							<p class="topmargin_20">  </p>
						</div>
						<div class="col-md-6 col-sm-12">
							<!-- <div class="topmargin_20"> -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d566.1070212623104!2d-66.19320476794356!3d-17.34934355033634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sbo!4v1608002529176!5m2!1ses!2sbo" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							<!-- </div> -->
						</div>
						<div class="col-md-3 col-sm-6">
							<!-- <div class="topmargin_20"> -->
							<h3 class="widget-titile">Contáctanos</h3>
							
							<div class="media small-teaser">
								<div class="media-left"> <i class="rt-icon2-device-phone highlight2 fontsize_24"></i> </div>
								<div class="media-body"> +591 4 4307073 </div>
							</div>
							<div class="media small-teaser">
								<div class="media-left"> <i class="rt-icon2-mail2 highlight2 fontsize_24"></i> </div>
								<div class="media-body"> <a href="mailto:info@inpromat.com.bo">info@inpromat.com.bo</a> </div>
							</div>
							<div class="media small-teaser">
								<div class="media-left"> <i class="rt-icon2-map2 highlight2 fontsize_24"></i> </div>
								<div class="media-body"> Calle Ladislao Cabrera N° E 0050 casi esquina calle Los Pinos (a una cuadra al norte de la Avenida Ecológica) </div>
							</div>
							<div class="media small-teaser">
								<div class="media-left"> <i class="rt-icon2-world highlight2 fontsize_24"></i> </div>
								<div class="media-body"> Tiquipaya </br>Cochabamba - Bolivia </div>
							</div>
							<div class="topmargin_20"> <a href="#" class="social-icon color-bg-icon soc-facebook"></a><a href="#" class="social-icon color-bg-icon soc-twitter"></a><a href="#" class="social-icon color-bg-icon soc-google"></a><a href="#" class="social-icon color-bg-icon soc-linkedin"></a>
								<a
								    href="#" class="social-icon color-bg-icon soc-pinterest"></a>
							</div>
							<!-- </div> -->
						</div>
					</div>
				</div>
			</footer>
			<section class="ds ms page_copyright parallax section_padding_15 with_top_border_container">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p>&copy; Copyright 2021. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="{{ URL::asset('js/compressed.js') }}"></script>
	<script src="{{ URL::asset('js/main.js') }}"></script>
	<script src="{{ URL::asset('js/switcher.js') }}"></script>

</body>

</html>