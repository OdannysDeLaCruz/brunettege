@extends('template')
@section('title', 'Moños sinteticos |')
@section('main-content')
	<h1 class="main-content-title">
		<span>
			<img src="img/icons/colas.png" class="main-content-title-icon" alt="">
			Colas ò Moños					
		</span>
		<div class="main-content-title-divisor"></div> 
		<span class="main-content-title-stars">
			<span class="fa fa-star"></span> 
			<span class="fa fa-star"></span> 
			<span class="fa fa-star"></span> 
			<span class="fa fa-star"></span> 
			<span class="fa fa-star"></span> 
		</span>
	</h1>
	<!-- Listado de productos lanapelo -->
	<section class="main-content-products">
		<!-- Productos -->
		<!-- <div class="card product-card">
			<img src="img/img-lanapelo.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			    <h5 class="card-title text-center">Lana pelo color Negro Azabache</h5>
			    <span class="card-quantity">20 unidad | 70cm x und</span>
			    <span class="card-price">$3.500</span>
			    <p class="card-text"></p>
			    <a href="" class="btn btn-primary text-center card-btn">PEDIRLO</a>
			</div>
		</div> -->
		@foreach($productos as $producto)
			<div class="card product-card">
				<img src='{{ asset("img/$producto->ruta") }}' class="card-img-top" alt="Producto lanapelos">
				<div class="card-body">
				    <h5 class="card-title text-center">{{ $producto->nombre }}</h5>
				    <span class="card-quantity">{{ $producto->unidades }} unidad | {{ $producto->longitud }} x und</span>
				    <span class="card-price">  ${{ $producto->precio }} </span>
				    <p class="card-text"></p>
				    <a class="btn btn-primary text-center card-btn btnSetCantidad" 

				    data-toggle="modal"
				    data-target="#modalCantidadProducto"
				    data-nombre="{{$producto->nombre}}"
				    data-precio="{{$producto->precio}}"
				    data-color="{{$producto->color}}"
				    >PEDIRLO</a>
				</div>
			</div>
		@endforeach
	</section>
@endsection	