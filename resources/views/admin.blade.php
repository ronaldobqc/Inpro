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
          <form action="{{ route('plasticos.delete', $producto['id']) }}" method="POST">
            @csrf
            @method("DELETE")

          <a href="{{ route('plasticos.show', $producto['id']) }}" class="btn btn-info btn-sm" style="color:white;">EDITAR</a>

              <button type="submit" class="btn btn-danger btn-sm" style="color:white;">ELIMINAR</button>
          </form>
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