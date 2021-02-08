@extends('header')

@section('contenido')
<section class="page_breadcrumbs ds color parallax section_padding_top_50 section_padding_bottom_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="text-uppercase">{{ $titulo }}</h2>
													</div>
					</div>
				</div>
			</section>
            <section class="ls section_padding_top_25 section_padding_bottom_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
                            <form method="POST" action="{{ $route }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @isset($update)
                                    @method("PUT")
                            @endisset
                            <div class="">
                                <div class="form-group row">
                                  <label for="portada" class="col-sm-1 col-form-label">Portada:</label>
                                    <div class="col-sm-11">
                                    <input type="file" class="form-control-file" id="portada" name="portada">
                                    </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="titulo" class="col-sm-1 col-form-label">Titulo:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="titulo" placeholder="Titulo de la noticia" name="titulo" required value="{{old('titulo') ?? $noticia['titulo']}}">
                                    </div>

                                    <label for="autor" class="col-sm-1 col-form-label">Autor:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="autor" placeholder="Autor" name="autor" required value="{{old('autor') ?? $noticia['autor']}}">
                                    </div>
                                    <label for="fecha" class="col-sm-1 col-form-label">Fecha:</label>
                                    <div class="col-sm-2">
                                    <input class="form-control"  type="date" display-format="DD/MM/YYYY" id="fecha" name="fecha" required value="{{old('fecha') ?? $noticia['fecha']}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="parrafo1" class="col-sm-1 col-form-label">Parrafo1:</label>
                                    <div class="col-md-11">
                                        <textarea class="form-control" id="parrafo1" rows="3" placeholder="Contenido" name="parrafo1" maxlength="450">{{old('parrafo1') ?? $noticia['parrafo1'] }}</textarea>
                                    </div>                                    
  				                </div>
                                  <div class="form-group row">
                                    <label for="parrafo2" class="col-sm-1 col-form-label">Parrafo2:</label>
                                    <div class="col-md-11">
                                        <textarea class="form-control" id="parrafo2" rows="3" placeholder="Contenido" name="parrafo2" maxlength="450">{{old('parrafo2') ?? $noticia['parrafo2'] }}</textarea>
                                    </div>                                    
                                  </div>
                                  <div class="form-group row">
                                  <label for="foto" class="col-sm-1 col-form-label">foto:</label>
                                  <div class="col-sm-3">
                                    <input type="file" class="form-control-file" id="foto" name="foto">
                                </div>
                                    <label for="parrafo3" class="col-sm-1 col-form-label">Parrafo3:</label>
                                    <div class="col-md-7">
                                        <textarea class="form-control" id="parrafo3" rows="4" placeholder="Contenido" name="parrafo3" maxlength="450">{{old('parrafo3') ?? $noticia['parrafo3'] }}</textarea>
                                    </div>                                    
                                  </div>
                                  
                                  <div class="form-group row">
                                  <label for="imagen1" class="col-sm-1 col-form-label">Imagen:</label>
                                    <div class="col-sm-3">
                                    <input type="file" class="form-control-file" id="imagen1" name="imagen1">
                                    </div>
                                    <label for="imagen2" class="col-sm-1 col-form-label">Imagen:</label>
                                    <div class="col-sm-3">
                                    <input type="file" class="form-control-file" id="imagen2" name="imagen2">
                                    </div>
                                    <label for="imagen3" class="col-sm-1 col-form-label">Imagen:</label>
                                    <div class="col-sm-3">
                                    <input type="file" class="form-control-file" id="imagen3" name="imagen3">
                                    </div>
                                </div>
                                </br>
                                <!--{!! csrf_field() !!}
                                @isset($update)
                                    @method("PUT")
                                @endisset-->
                            </div>
                            <div class="modal-footer">
                                <a style="color:white" type="button" class="btn btn-danger btn-md" data-dismiss="modal" href="{{ route('plasticos.getAll') }}">CANCELAR</a>
		                        <button type="submit" class="btn btn-success btn-md">{{ $textButton }}</button>
	                        </div>
	                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection