@extends('header')
@section('contenido')

	<section class="intro_section page_mainslider ds">
		<div class="flexslider vertical-nav" data-dots="false" data-nav="true">
			<ul class="slides">
				<li> <img src="images/slide01.png" alt="">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<div class="slide_description_wrapper">
									<div class="slide_description">
										<div class="intro-layer" data-animation="fadeInUp">
											<h5 class="text-uppercase thin"> Inpromat </h5>
										</div>
										<div class="intro-layer" data-animation="fadeInUp">
											<h2 class="text-uppercase thin"> <strong class="highlight">Innovación</strong> Y Tecnología </h2>
										</div>
										<div class="intro-layer" data-animation="fadeInUp">
											<p class="thin"> <em>Innovando en el diseño y fabricación de moldes para la Industria del Plastico desde 2002</em> </p>
										</div>
										<div class="intro-layer" data-animation="fadeInUp"> <a href="{{ route('plasticos.get') }}" class="theme_button color1 inverse">
									Ver Catálogo
								</a> </div>
									</div>
									<!-- eof .slide_description -->
								</div>
								<!-- eof .slide_description_wrapper -->
							</div>
							<!-- eof .col-* -->
						</div>
						<!-- eof .row -->
					</div>
					<!-- eof .container -->
				</li>
				<li> <img src="images/slide02.png" alt="">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<div class="slide_description_wrapper">
									<div class="slide_description">
										<div class="intro-layer" data-animation="fadeInUp">
											<h5 class="text-uppercase thin"> Inpromat </h5>
										</div>
										<div class="intro-layer" data-animation="fadeInUp">
											<h2 class="text-uppercase thin"> <strong class="highlight2">Importación</strong> de Maquinaria </h2>
										</div>
										<div class="intro-layer" data-animation="fadeInUp">
											<p class="thin"> <em>Equipos, herramientas y accesorios para la industria del plastico</em> </p>
										</div>
										<div class="intro-layer" data-animation="fadeInUp"> <a href="{{ route('plasticos.get') }}" class="theme_button color2 inverse">
											Ver Catálogo
								</a> </div>
									</div>
									<!-- eof .slide_description -->
								</div>
								<!-- eof .slide_description_wrapper -->
							</div>
							<!-- eof .col-* -->
						</div>
						<!-- eof .row -->
					</div>
					<!-- eof .container -->
				</li>
				<li> <img src="images/slide03.png" alt="">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<div class="slide_description_wrapper">
									<div class="slide_description">
										<div class="intro-layer" data-animation="fadeInUp">
											<h5 class="text-uppercase thin"> Inpromat </h5>
										</div>
										<div class="intro-layer" data-animation="fadeInUp">
											<h2 class="text-uppercase thin"> <strong class="highlight3">Producción</strong> de Calidad </h2>
										</div>
										<div class="intro-layer" data-animation="fadeInUp">
											<p class="thin"> <em>Procesos de moldeo por Inyección y Soplado</em> </p>
										</div>
										<div class="intro-layer" data-animation="fadeInUp"> <a href="{{ route('plasticos.get') }}" class="theme_button color3 inverse">
											Ver Catálogo
								</a> </div>
									</div>
									<!-- eof .slide_description -->
								</div>
								<!-- eof .slide_description_wrapper -->
							</div>
							<!-- eof .col-* -->
						</div>
						<!-- eof .row -->
					</div>
					<!-- eof .container -->
				</li>
			</ul>
		</div>
		<!-- eof flexslider -->
	</section>
	<section id="fuatures" class="ds columns_padding_0">
		<div class="container-fluid">
			<div class="row flex-row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="teaser media media-xxs-block inline-block cs hover_icon with_padding big_padding">
						<div class="media-left media-middle">
							<div class="size_big inline-block round light_bg_color thick_border_icon"> <i class="fa fa-truck highlight teaser_icon" aria-hidden="true"></i> </div>
						</div>
						<div class="media-body media-middle">
							<h4 class="text-uppercase bottommargin_10"><a href="#0">Innovación</a></h4>
							<p></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="teaser media media-xxs-block inline-block cs main_color2 hover_icon with_padding big_padding">
						<div class="media-left media-middle">
							<div class="size_big inline-block round light_bg_color thick_border_icon"> <i class="fa fa-user highlight2 teaser_icon" aria-hidden="true"></i> </div>
						</div>
						<div class="media-body media-middle">
							<h4 class="text-uppercase bottommargin_10"><a href="#0">Tecnología</a></h4>
							<p></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="teaser media media-xxs-block inline-block cs main_color3 hover_icon with_padding big_padding">
						<div class="media-left media-middle">
							<div class="size_big inline-block round light_bg_color thick_border_icon"> <i class="fa fa-tags highlight3 teaser_icon" aria-hidden="true"></i> </div>
						</div>
						<div class="media-body media-middle">
							<h4 class="text-uppercase bottommargin_10"><a href="#0">Calidad </a></h4>
							<p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="about" class="ls page_about background_cover section_padding_top_150 section_padding_bottom_150">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6 text-center">
					<h2 class="section_header"> <span class="small">Bienvenido a</span> Inpro<span class="highlight">mat</span> </h2>
					<p class="fontsize_20">Somos una industria de procesamiento de materiales y producción de artículos de plástico, 
						contamos con más de 10 años de experiencia en el área de diseño y fabricación de moldes (matrices) y alrededor de 
						6 años en la manufacturación de artículos plásticos</p>
					<p class="topmargin_50"> <a href="{{ route('nosotros') }}" class="theme_button color1 inverse">Acerca de Nosotros</a> </p>
				</div>
			</div>
		</div>
	</section>
	<section id="features" class="ds color parallax page_features section_padding_top_150 section_padding_bottom_150">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-5">
					<h2 class="section_header"> <span class="small">Acerca de</span> Inpro<span class="highlight">Mat</span> </h2>
					<p Align = "justify" class="fontsize_20"> <strong>Inpromat</strong> cuenta con modernas y apropiadas instalaciones productivas y administrativas, 
						edificadas en aproximadamente 1000 metros cuadrados, localizados en la zona noroeste de la ciudad de Cochabamba; se tienen dos líneas de producción: 
						la línea de moldeo de plástico por inyección y moldeo por soplado; ofrecemos además servicios de diseño-fabricación de moldes y venta de maquinaria, 
						herramientas y accesorios para el sector productivo de plásticos.  </p>
				</div>
				<div class="col-md-6 col-lg-offset-1">
					<div class="teaser media">
						<div class="media-left">
							<div class="teaser_icon size_small highlight"> <i class="fa fa-industry"></i> </div>
						</div>
						<div class="media-body">
							<h4 class="highlight text-uppercase"> Fabricacion de articulos plasticos </h4>
							<p> Produccion de diferentes articulos plasticos mediante procesos de moldeo por inyección y soplado. </p>
						</div>
					</div>
					<div class="teaser media">
						<div class="media-left">
							<div class="teaser_icon size_small highlight2"> <i class="fa fa-truck"></i> </div>
						</div>
						<div class="media-body">
							<h4 class="highlight2 text-uppercase"> Importación y venta de maquinarias </h4>
							<p> Importación y venta de maquinaria, equipos, herramientas y accesorios para la industria del plástico. </p>
						</div>
					</div>
					<div class="teaser media">
						<div class="media-left">
							<div class="teaser_icon size_small highlight3"> <i class="fa fa-cogs"></i> </div>
						</div>
						<div class="media-body">
							<h4 class="highlight3 text-uppercase"> Diseño y fabricación de moldes </h4>
							<p> Diseño y fabricacion de moldes para la industria del plástico. Contamos con un moderno centro mecanizado con herramientas CAD/CAM - CNC </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="categories" class="ls section_padding_top_150 section_padding_bottom_150">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="section_header"> <span class="small">Catálogo de</span> PRODUCTOS </h2>
				</div>
			</div>
			<div class="row topmargin_30">
				<div class="col-sm-12 text-center"> <a href="doc/catalogo.pdf" target = "blank" class="theme_button color1 inverse">Descarga el catálogo</a> </div>
			</div>
		</div>
	</section>
	<div id="testimonials" class="ds color page_testimonials parallax section_padding_top_150 section_padding_bottom_150">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="owl-carousel testimonials-owl-content topmargin_20" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1" data-loop="true" data-margin="0" data-dots="true" data-nav="false">
						<blockquote class="text-center with_quote topmargin_0">
							<div class="item-meta">
								<h5> <span class="thin">Gerente General </span> Fernando Guzmán R.</h5>
							</div>
							<p>INPROMAT está comprometida con el cuidado del medio ambiente, para lo cual se promueve una economía innovadora y circular en la que se valoran y optimizan los recursos utilizados y se reducen los impactos ambientales, enmarcados en la legislación ambiental vigente a nivel nacional y la mejora continua.</p>
						</blockquote>
						<blockquote class="text-center with_quote topmargin_0">
							<div class="item-meta">
								<h5> <span class="thin">Gerente General </span> Fernando Guzmán R.</h5>
							</div>
							<p>INPROMAT ha demostrado su capacidad paraenfrentar múltiples cambios y tomar al mismotiempo en cuenta los intereses de susasalariados sin perder lo que constituye suesencia, su cultura.</p>
						</blockquote>
						<blockquote class="text-center with_quote topmargin_0">
							<div class="item-meta">
								<h5> <span class="thin">Gerente General </span> Fernando Guzmán R.</h5>
							</div>
							<p>Que cada uno haga suyo este contenido y lo aplique en cada una de las actividades que desarrollan en la empresa</p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="news" class="ls section_padding_top_150 section_padding_bottom_150">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="section_header"> Nuevas Noticias </h2>
					<div class="owl-carousel topmargin_50" data-responsive-lg="3">
						<article class="vertical-item content-padding with_border rounded">
							<div class="item-media top_rounded overflow_hidden"> <img src="images/gallery/01.jpg" alt="">
								<div class="entry-meta-corner main_bg_color"> <span class="date">20</span> <span class="small-text big-spacing">Enero</span> </div>
							</div>
							<div class="item-content">
								<h4 class="entry-title"> <a href="{{ route('noticia') }}">Auditoria</a> </h4>
								<p>Gerencia General y los responsables designados, son responsables de comunicar este evento a sus partes interesadas</p>
								<p class="highlightlinks"> <a href="{{ route('noticia') }}" class="read-more">read more</a> </p>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection