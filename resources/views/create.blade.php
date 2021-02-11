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
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre del producto" name="nombre" required value="{{old('nombre') ?? $plastic['nombre'] }}">
                                    </div>

                                    <label for="categoria" class="col-sm-2 col-form-label">Categoria:</label>
		  				                <div class="col-md-4">   
    						                <select class="form-control" id="categoria" name="categoria" required >
      							                <option value="{{old('categoria') ?? $plastic['categoria'] }}" selected>{{old('categoria') ?? $plastic['categoria'] }}</option>
                                                <option value="LINEA HOGAR">LINEA HOGAR</option>
                                                <option value="LINEA ENVASES">LINEA ENVASES</option>
                                                <option value="LINEA BIOSEGURIDAD">LINEA BIOSEGURIDAD</option>
    						                </select>
		  				                </div>
                                </div>
                                <div class="form-group row">
                                    <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="precio" placeholder="Precio del producto" name="precio" required value="{{old('precio') ?? $plastic['precio'] }}">
                                    </div>

                                    <label for="especificacion" class="col-sm-2 col-form-label">Especific:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="especificacion" placeholder="Precio por docena / unidad" name="especificacion" required value="{{old('especificacion') ?? $plastic['especificacion'] }}">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" id="descripcion" rows="2" placeholder="Descripcion" name="descripcion" maxlength="80" required>{{old('descripcion') ?? $plastic['descripcion']}}</textarea>
                                    </div>
                                    <label for="file" class="col-sm-2 col-form-label">Imagen:</label>
                                    @isset($update)
					                    <input type="file" class="form-control-file" id="file" name="foto">
                                    @else
                                        <input type="file" class="form-control-file" id="file" name="foto" required>
                                    @endisset

  				                </div>
  				        

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