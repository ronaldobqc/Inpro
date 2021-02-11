@extends('header')

@section('contenido')

<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="text-uppercase">Noticia</h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="{{ route('inicio') }}">
							Inicio
						</a> </li>
								<li> <a href="{{ route('noticias.get') }}">Noticias</a> </li>
								<li class="active">Noticia</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-push-1">
							<article class="single-post vertical-item content-padding big-padding with_border rounded post">
								<div class="entry-thumbnail item-media bottommargin_40"> <img src="{{ URL::asset($noticia['portada']) }}" alt="">
									<div class="entry-meta-corner main_bg_color3"> <span class="date">{{ $noticia['fecha'] }}</span> <span class="small-text big-spacing"></span> </div>
								</div>
								<div class="item-content">
									<header class="entry-header">
										
										<h1 class="entry-title topmargin_0"> {{ $noticia['titulo'] }} </h1>
										<div class="entry-meta small-text big medium content-justify"> <span class="highlight2links">
													<a> {{ $noticia['autor'] }}</a>
										</span> ></div>
									</header>
									<!-- .entry-header -->
									<div class="entry-content">
										<p>{{ $noticia['parrafo1'] }}</p>
					
										<p><div> <img class="alignleft" alt="" src="{{ URL::asset($noticia['foto']) }}"> <p>{{ $noticia['parrafo2'] }}</p> </div></p>
										<p>{{ $noticia['parrafo3'] }}</p>
										<p>{{ $noticia['parrafo4'] }}</p>
										
									</div>
									<!-- .entry-content -->
									
								</div>
								<!-- .item-content -->
							</article>
							
							<div class="row">
								<div class="col-md-12">
									<div id="gallery-owl-carousel" class="owl-carousel dots-center _items" data-dots="true" data-items="3" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-responsive-xs="1">
										<article class="vertical-item content-padding with_border color_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="{{ URL::asset($noticia['imagen1']) }}" alt="">
												<div class="media-links"> <a href="{{ URL::asset($noticia['imagen1']) }}" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color2_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="{{ URL::asset($noticia['imagen2']) }}" alt="">
												<div class="media-links"> <a href="{{ URL::asset($noticia['imagen2']) }}" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color4_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="{{ URL::asset($noticia['imagen3']) }}" alt="">
												<div class="media-links color3"> <a href="{{ URL::asset($noticia['imagen3']) }}" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>

										
			
									</div>
								</div>
							</div>
								
							
						<!--eof .col-sm-8 (main content)-->
					</div>
				</div>
			</section>

@endsection