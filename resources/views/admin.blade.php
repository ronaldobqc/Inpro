@extends('header')
@section('contenido')

            <section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="text-uppercase">Lista de Productos</h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="{{ route('inicio') }}">
							Inicio
						</a> </li>
								<li class="active">Lista de Productos</li>
							</ol>
						</br>
							<div class="intro-layer" data-animation="fadeInUp">
                                <a href="{{ route('plasticos.create') }}" data-toggle="modal" target = "blank" class="theme_button color1 inverse">
								Nuevo Producto
                            </a>
                            <a href="{{ route('noticia.create') }}" data-toggle="modal" target = "blank" class="theme_button color1 inverse">
								Nueva Noticia
                            </a>
                            </div>
                            
						</div>
						
					</div>
				</div>
            </section>
            
    <section>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header row" style="background-color: #00ccbd; color:white;">
                        <h3 class="modal-title col-md-11" id="exampleModalLongTitle">NUEVO PRODUCTO</h3>
                        <button type="button" class="close col-md-1" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
	                </div>
	                <div class="container">
			            <form method="POST" action="{{ route('plasticos.post') }}" enctype="multipart/form-data">
                            <div class="modal-body">
                                
                                <div class="form-group row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre del producto" name="nombre" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="precio" placeholder="Precio del producto" name="precio" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="especificacion" class="col-sm-2 col-form-label">Especific:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="especificacion" placeholder="Precio por docena / unidad" name="especificacion" required>
                                    </div>
                                </div>
  				                <div class="form-group row">
                                    <label for="categoria" class="col-sm-2 col-form-label">Categoria:</label>
		  				                <div class="col-md-10">   
    						                <select class="form-control" id="categoria" name="categoria" required>
      							                <option value="HOGAR">LINEA HOGAR</option>
                                                <option value="ENVASES">LINEA ENVASES</option>
                                                <option value="BIOSEGURIDAD">LINEA BIOSEGURIDAD</option>
    						                </select>
		  				                </div>
                                </div>
                                <div class="form-group row">
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="descripcion" rows="2" placeholder="Descripcion" name="descripcion" maxlength="80"></textarea>
                                    </div>
  				                </div>
  				                <div class="form-group">
    				                <label for="file">Example file input</label>
					                <input type="file" class="form-control-file" id="file" name="foto" required>
  				                </div>
                                {!! csrf_field() !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Close</button>
		                        <button type="submit" class="btn btn-success btn-md">Guardar</button>
	                        </div>
	                    </form>
		            </div>
                </div>
            </div>
        </div>

    </section>

            <section class="ls section_padding_top_75 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
                            <table class="table table-striped">
  <thead>
    <tr style="background-color: #00ccbd;">
      <th scope="col" class="col-md-2">NOMBRE</th>
      <th scope="col" class="col-md-1">PRECIO</th>
      <th scope="col" class="col-md-4">DESCRIPCION</th>
      <th scope="col" class="col-md-2">GRUPO</th>
      <th scope="col" class="col-md-3">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    @forelse($productos as $producto)
    <tr>
      <td>{{ $producto['nombre'] }}</td>
      <td>{{ $producto['precio'] }}</td>
      <td>{{ $producto['descripcion'] }}</td>
      <td>{{ $producto['categoria'] }}</td>
      <td style="margin:0;">
          <a href="{{ route('plasticos.show', $producto['id']) }}" class="btn btn-info btn-sm" style="color:white;">EDITAR</a>
          <a href="#" class="btn btn-danger btn-sm" style="color:white;">ELIMINAR</a>
      </td>
    </tr>
    @empty
    <tr>
        <td colspan="5">
            <div class="bg-red-100 text-center border border-red-400">
                <p><strong class="font-weight-bold">{{_("No hay productos")}}</strong></p>
                <span class="block sm:inline">{{_("Todavia no hay nada que mostrar aqui")}}</span>
            </div>
        </td>
    </tr>
    @endforelse
  </tbody>
</table>
							</div>
						</div>
					</div>
				</div>
			</section>

@endsection