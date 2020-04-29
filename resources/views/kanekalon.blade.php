@extends('template')
@section('title', 'Kanekalon |')
@section('main-content')
	<h1 class="main-content-title">
		<span>
			<img src="img/icons/kanekalon.png" class="main-content-title-icon" alt="">
				Kanekalon						
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
			    <a href="#" class="btn btn-primary text-center card-btn">PEDIRLO</a>
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

		<!-- Modal escoger cantidad -->
		<div class="modal fade" id="modalCantidadProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title text-center" id="exampleModalLongTitle">Especifìque la cantidad que necesita de este producto</h5>
		      </div>
		      <div class="modal-body py-5 my-3">
		        <form action="" id="formCantidad">
		        	<a type="reset" class="btn card-btn" id="btnMenos"> - </a>
		        	<input class="col-8" type="text" value="1" id="inputCantidadProducto">
		        	<a class="btn card-btn" id="btnMas"> + </a>
		        </form>
		      </div>
		      <div class="row m-0 p-2">
		      	<div class="col-6 p-2">
			        <a class="btn card-btn-cancelar m-0" id="cardBtnCancelar" data-dismiss="modal">CANCELAR</a>	      		
		      	</div>
		      	<div class="col-6 p-2">		      		
		        	<a id="btnHacerPedido" href="" class="btn text-center card-btn m-0">PEDIRLO</a>
		      	</div>
		      </div>
		    </div>
		  </div>
		</div>
	</section>
@endsection