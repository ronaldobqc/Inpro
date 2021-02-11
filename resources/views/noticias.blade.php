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
													<a href="#"></a>
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