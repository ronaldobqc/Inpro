@extends('header')

@section('contenido')

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="text-uppercase">Contáctanos</h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="{{ route('inicio') }}">Inicio</a> </li>
								<li class="active">Contáctanos</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			
			<section class="ls section_padding_top_75 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-phone5"></i> </div>
								<p> <span class="grey">Telefono:</span> +591 4 4307073<br> <span class="grey">Celular:</span> +591 4 4307073 </p>
							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-location2"></i> </div>
								<p> N° E 0050<br> Calle Ladislao Cabrera casi esquina calle Los Pinos<br> Tiquipaya, Cochabamba - Bolivia </p>
							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-world"></i> </div>
								<p>info@inpromat.com.bo</p>
								<p> <a href="#" class="social-icon color-icon soc-twitter"></a> <a href="#" class="social-icon color-icon soc-facebook"></a> <a href="#" class="social-icon color-icon soc-google"></a> <a href="#" class="social-icon color-icon soc-pinterest"></a> </p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page_map" data-address="Terracina, LT, Italia">
				<!-- marker description and marker icon goes here -->
				<div class="map_marker_description">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d566.1070212623104!2d-66.19320476794356!3d-17.34934355033634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sbo!4v1608002529176!5m2!1ses!2sbo" width="100%" height="580" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</section>

@endsection