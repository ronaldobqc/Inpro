@extends('header')

@section('contenido')

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="text-uppercase">Noticias</h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="{{ route('inicio') }}">
							Inicio
						</a> </li>
								<li class="active">Noticias</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_25">
				<div class="container">
					
					<div class="row">
						<div class="col-sm-10 col-sm-push-1">
							<!--<article class="vertical-item content-padding big-padding with_border rounded post format-standard">
								<div class="item-media entry-thumbnail rounded overflow_hidden bottommargin_30"> <img src="images/gallery/12.jpg" alt="">
									<div class="media-links color3"> <a href="{{ route('noticia') }}" class="abs-link"></a> </div>
									<div class="entry-meta-corner main_bg_color"> <span class="date">06</span> <span class="small-text big-spacing">aug</span> </div>
								</div>
								<div class="item-content">
									<header class="entry-header">
										<div class="entry-meta small-text big medium content-justify"> <span class="highlightlinks">
										<a href="#">Categoria</a>
									</span> <span class="greylinks">
										<a href="#">Autor</a>
									</span> </div>
										<h4 class="entry-title"> <a href="{{ route('noticia') }}">Titulo noticia</a> </h4>
									</header>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
							</article>-->
							<!-- .post -->



							<!--<article class="post format-small-image">
								<div class="side-item side-md content-padding big-padding with_border">
									<div class="row">
										<div class="col-md-5">
											<div class="item-media entry-thumbnail rounded overflow_hidden"> <img src="images/events/04.jpg" alt="">
												<div class="media-links color2"> <a href="{{ route('noticia') }}" class="abs-link"></a> </div>
												<div class="entry-meta-corner main_bg_color2"> <span class="date">04</span> <span class="small-text big-spacing">aug</span> </div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="item-content">
												<header class="entry-header">
													<div class="entry-meta small-text big medium content-justify"> <span class="highlight2links">
													<a href="#">Categoria</a>
												</span> <span class="greylinks">
													<a href="#">Autor</a>
												</span> </div>
													<h4 class="entry-title hover-color2"> <a href="{{ route('noticia') }}" rel="bookmark">Titulo Noticia</a> </h4>
												</header>
												<div class="entry-content">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>-->
							@foreach($noticias as $noticia)
							<article class="post format-small-image">
								<div class="side-item side-md content-padding big-padding with_border">
									<div class="row">
										<div class="col-md-5">
											<div class="item-media entry-thumbnail rounded overflow_hidden"> <img src="{{ $noticia['portada'] }}" alt="">
												<div class="media-links color2"> <a href="{{ route('noticia.show', $noticia['id']) }}" class="abs-link"></a> </div>
												<div class="entry-meta-corner main_bg_color2"> <span class="date">{{ $noticia['fecha'] }}</span> <span class="small-text big-spacing"></span> </div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="item-content">
												<header class="entry-header">
													<div class="entry-meta small-text big medium content-justify"> <span class="highlight2links">
													<a href="#">Categoria</a>
												</span> <span class="greylinks">
													<a href="#">{{ $noticia['autor'] }}</a>
												</span> </div>
													<h4 class="entry-title hover-color2"> <a href="{{ route('noticia.show', $noticia['id']) }}" rel="bookmark">{{ $noticia['titulo'] }}</a> </h4>
												</header>
												<div class="entry-content">
													<p>{{ $noticia['parrafo1'] }}</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
							@endforeach
						</div>
						<!--eof .col-sm-8 (main content)-->
					</div>
				</div>
			</section>
			
@endsection