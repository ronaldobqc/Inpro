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
								<li> <a href="{{ route('noticias') }}">Noticias</a> </li>
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
								<div class="entry-thumbnail item-media bottommargin_40"> <img src="images/gallery/09.jpg" alt="">
									<div class="entry-meta-corner main_bg_color3"> <span class="date">06</span> <span class="small-text big-spacing">aug</span> </div>
								</div>
								<div class="item-content">
									<header class="entry-header">
										
										<h1 class="entry-title topmargin_0"> Titulo Ejemplo de Noticia </h1>
									</header>
									<!-- .entry-header -->
									<iframe src="doc/plan.pdf" frameborder="10" style="width:100%; height: 200vh; border:none" ></iframe>
									<!-- .entry-content -->
									
								</div>
								<!-- .item-content -->
							</article>
							
							<div class="row">
								<div class="col-md-12">
									<div id="gallery-owl-carousel" class="owl-carousel dots-center _items" data-dots="true" data-items="3" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-responsive-xs="1">
										<article class="vertical-item content-padding with_border color_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/01.jpg" alt="">
												<div class="media-links"> <a href="images/gallery/01.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color2_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/02.jpg" alt="">
												<div class="media-links"> <a href="images/gallery/02.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color4_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/03.jpg" alt="">
												<div class="media-links color3"> <a href="images/gallery/03.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color3_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/04.jpg" alt="">
												<div class="media-links color4"> <a href="images/gallery/04.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color2_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/05.jpg" alt="">
												<div class="media-links"> <a href="images/gallery/05.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color3_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/06.jpg" alt="">
												<div class="media-links color3"> <a href="images/gallery/06.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color4_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/07.jpg" alt="">
												<div class="media-links color4"> <a href="images/gallery/07.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/08.jpg" alt="">
												<div class="media-links"> <a href="images/gallery/08.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color3_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/09.jpg" alt="">
												<div class="media-links color4"> <a href="images/gallery/09.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color4_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/10.jpg" alt="">
												<div class="media-links"> <a href="images/gallery/10.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/11.jpg" alt="">
												<div class="media-links color3"> <a href="images/gallery/11.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
											</div>
										</article>
										<article class="vertical-item content-padding with_border color2_border text-center post format-standard">
											<div class="item-media bottommargin_30"> <img src="images/gallery/12.jpg" alt="">
												<div class="media-links"> <a href="images/gallery/12.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
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