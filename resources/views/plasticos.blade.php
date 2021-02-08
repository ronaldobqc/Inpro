@extends('header')

@section('contenido')

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="text-uppercase">Catálogo de Productos</h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="{{ route('inicio') }}">
							Inicio
						</a> </li>
								<li class="active">Catálogo de Productos</li>
							</ol>
						</br>
							<div class="intro-layer" data-animation="fadeInUp"> <a href="doc/catalogo.pdf" target = "blank" class="theme_button color1 inverse">
								Descarga el Catálogo
							</a> </div>
						</div>
						
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
							</div>
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="active"><a href="#tab4" role="tab" data-toggle="tab"><i class="rt-icon2-drink"></i>Linea Hogar</a></li>
								<li><a href="#tab5" role="tab" data-toggle="tab"><i class="rt-icon2-basket"></i>Linea Envases</a></li>
								<li><a href="#tab6" role="tab" data-toggle="tab"><i class="rt-icon2-cup"></i>Bioseguridad</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content top-color-border">
								
								<div class="tab-pane fade in active" id="tab4">
									<div class="columns-3">
										<ul id="products" class="products list-unstyled grid-view bottommargin_0">

										@foreach($plasticos1 as $plastico)
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="{{ $plastico['ubicacion'] }}" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color"> <span class="value">{{ $plastico['precio']}}</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">{{ $plastico['especificacion'] }}</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">{{ $plastico['nombre'] }}</a> </h4>
																<pre>{{ $plastico['descripcion'] }}</pre>
															</div>
														</div>
													</div>
												</div>
											</li>
										@endforeach
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/01.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color"> <span class="value">13.5</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Docena</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Vaso 250 ml - Antiguo</a> </h4>
																<p>Precio por Docena: 13.5 Bs.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/02.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color2"> <span class="value">16.5</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Docena</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Vaso 350 ml</a> </h4>
																<p>Precio por Docena: 16.5 Bs.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/03.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color3"> <span class="value">15.0</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Docena</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Vaso 250 ml - Nuevo</a> </h4>
																<p>Precio por Docena: 15 Bs.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/04.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color4"> <span class="value">20.0</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Docena</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Vaso 400 ml</a> </h4>
																<p>Precio por Docena: 20 Bs.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/05.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color5"> <span class="value">16.0</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Docena</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Gelatineras</a> </h4>
																<p>Precio por Docena: 16 Bs.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/06.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color6"> <span class="value">84.0</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Docena</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Jarras 1.8 L</a> </h4>
																<p>Precio por Docena: 84 Bs.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/07.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color"> <span class="value">3.0 - 6.0</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Tapper 785 ml. y 1.85 l.</a> </h4>
																<p>Tapper de 785 ml. - 3 Bs. </br> Tapper de 1.85 l. - 6 Bs.  </p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/09.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color2"> <span class="value">15.0 - 30.0</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad </br> * Plato Incluido *</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Maceta</a> </h4>
																<p> Alto   x   Ancho 
																</br> 22.0 cm x 25.0 cm - 15 Bs. 
																</br>25.5 cm x 30.5 cm - 20 Bs. 
																</br>28.0 cm x 34.0 cm - 25 Bs. 
																</br>30.5 cm x 37.0 cm - 30 Bs. </p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/10.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color3"> <span class="value">16.0 - 18.0</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Canastillo</a> </h4>
																<p> Alto   x   Ancho   x   Largo
																</br>23.5 cm   x   30.5 cm   x   44.0 cm
																</br>Color Negro - 17 Bs. 
																</br>Colores varios - 18 Bs.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>


								<div class="tab-pane fade" id="tab5">
									<div class="columns-3">
										<ul id="products" class="products list-unstyled grid-view bottommargin_0">
										@foreach($plasticos2 as $plastico)
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="{{ $plastico['ubicacion'] }}" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color"> <span class="value">{{ $plastico['precio'] }}</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">{{ $plastico['especificacion'] }}</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">{{ $plastico['nombre'] }}</a> </h4>
																<pre> {{ $plastico['descripcion'] }}</pre>
															</div>
														</div>
													</div>
												</div>
											</li>
										@endforeach
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/12.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color"> <span class="value">0.48 - 0.62</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Botella Pet</a> </h4>
																<p> Botella Pet 330 ml : 0.48 Bs 
																</br>Botella Pet 600 ml : 0.62 Bs 
																</br></br>No incluye Tapa*
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/12.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color4"> <span class="value">0.75 - 1.15</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Botella Pet</a> </h4>
																Botella Pet 1 l : 0.75 Bs 
																</br>Botella Pet 1.5 l : 0.88 Bs
																</br>Botella Pet 2 l : 1.10 Bs
																</br>No incluye Tapa*
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/13.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color6"> <span class="value">0.80</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Botella Pet 200 ml.</a> </h4>
																<p>  
																</br>Con Factura: 0.85 Bs
																</br></br>Incluye Tapa*
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/14.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color5"> <span class="value">1.095</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Botella Pet 500 ml.</a> </h4>
																<p>  
																</br>Con Factura: 1.095 Bs
																</br></br>Incluye Tapa*
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/15.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color2"> <span class="value">0.98</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Botella Pet 1 l.</a> </h4>
																<p>
																</br>Con Factura: 0.98 Bs
																</br></br>No incluye Tapa*
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/16.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color3"> <span class="value">1.40</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Botella Pet 250 ml.</a> </h4>
																<p>
																</br>Con Factura: 1.40 Bs
																</br>Incluye Tapa* </br> Colores Blanco y Café
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/17.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color6"> <span class="value">4.20</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Botella Pet Cilindrica 4.5 l.</a> </h4>
																<p>
																</br>Con Factura: 4.20 Bs
																</br>Incluye Tapa y Asa*
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/18.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color"> <span class="value">4.20</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Botella Pet Cilindrica 5 l.</a> </h4>
																<p>
																</br>Con Factura: 4.20 Bs
																</br>Incluye Tapa y Asa*
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/19.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color2"> <span class="value">4.20</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Botella Pet Cuadrada 5 l.</a> </h4>
																<p>
																</br>Con Factura: 4.20 Bs
																</br>ncluye Tapa y Asa*
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/20.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color3"> <span class="value">4.50</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Botella Pet Blanca 5 l.</a> </h4>
																<p>
																</br>Con Factura: 4.50 Bs
																</br>Incluye Tapa y Asa*
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/21.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color4"> <span class="value">80.0</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Millar</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Asa 28 mm.</a> </h4>
																<p> Colores Disponibles: Amarillo, Rojo, Celeste, Azul, Verde viva y Transparente.
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/22.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color5"> <span class="value">230</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Millar</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Asa 38 mm.</a> </h4>
																<p> Colores Disponibles: Amarillo, Rojo, Celeste, Azul, Verde viva y Transparente.
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/25.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color6"> <span class="value">560</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Caja</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Tapa Rosca 28/410</a> </h4>
																<p> 
																</br>Con Factura: 560 Bs
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/26.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color"> <span class="value">0.23</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Tapa Rosca 38</a> </h4>
																<p> 
																</br>
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/27.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color2"> <span class="value">245</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Millar</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Tapa Flip Top</a> </h4>
																<p>
																</br>Con Factura: 245 Bs
																</br>
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/28.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color3"> <span class="value">245</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Millar</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Tapa Shampoo</a> </h4>
																<p>
																</br>Con Factura: 245 Bs
																</br>
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/29.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color4"> <span class="value">180</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Millar</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Tapa Vajillero Short</a> </h4>
																<p>
																</br>Con Factura: 180 Bs
																</br>
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/30.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color5"> <span class="value">225</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Millar</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Tapa Vajillero Long</a> </h4>
																<p>
																</br>Con Factura: 225 Bs
																</br>
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/31.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color6"> <span class="value">200</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Millar</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Tapa de Botellón Short</a> </h4>
																<p>
																</br>Con Factura: 200 Bs
																</br>
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/32.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color"> <span class="value">220</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Millar</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Tapa de Botellon Long</a> </h4>
																<p> 
																</br>
																</br>
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/23.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color2"> <span class="value">280</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Millar</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Tapa Sport Short</a> </h4>
																<p>
																</br>Con Factura: 280 Bs
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/24.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color3"> <span class="value">320</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Millar</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Tapa Sport Long</a> </h4>
																<p>
																</br>Con Factura: 320 Bs
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/33.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color4"> <span class="value">27.5</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Botellón</a> </h4>
																<p>
																</br>Con Factura: 27.50 Bs
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/34.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color5"> <span class="value">11.5</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Grifo de botellon.</a> </h4>
																<p>
																</br>Con Factura: 11.50 Bs
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/35.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color6"> <span class="value">27.5</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Dispensador</a> </h4>
																<p>
																</br>Con Factura: 27.50 Bs
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/36.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color2"> <span class="value">47.50</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Kilo</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Termocontraibles</a> </h4>
																<p> Colores Disponibles: Blanco, Amarillo y Verde Viva
																</br>
																</p>
															</div>
														</div>
													</div>
												</div>
											</li>


										</ul>
									</div>
								</div>

								<div class="tab-pane fade" id="tab6">
									<div class="columns-3">
										<ul id="products" class="products list-unstyled grid-view bottommargin_0">
										@foreach($plasticos3 as $plastico)
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="{{ $plastico[ 'ubicacion' ] }}" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color"> <span class="value">{{ $plastico[ 'precio' ] }}</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">{{ $plastico[ 'especificacion' ] }}</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">{{ $plastico[ 'nombre' ] }}</a> </h4>
																<pre>{{ $plastico[ 'descripcion' ] }}</pre>
															</div>
														</div>
													</div>
												</div>
											</li>
										@endforeach
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/37.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color"> <span class="value">9.50</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Protectores Faciales</a> </h4>
																<p>
																</br>Con Factura: 9.50 Bs</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="product type-product">
												<div class="side-item no-content-padding with_border content-padding">
													<div class="row">
														<div class="col-md-5">
															<div class="item-media muted_background rounded overflow_hidden"> <a href="#">
														<img src="images/shop/38.png" alt="">
													</a>
																<div class="entry-meta-corner main_bg_color2"> <span class="value">3.0</span> <span class="small-text big-spacing">Bs.</span> </div>
															</div>
															<div class="item-content text-center">
																<div class="content-justify">
																	<div class="small-text big highlight2links"> <a href="#">Precio por Unidad</a> </div>
																</div>
																<h4 class="entry-title topmargin_10 hover-color2"> <a href="#">Viseras</a> </h4>
																<p>
																</br>Con Factura: 3.0 Bs</p>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</section>
			
@endsection