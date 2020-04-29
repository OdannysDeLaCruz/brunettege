@extends('template')
@section('title', '')
@section('main-content')
	<!-- Carruseles de cada producto de Brunette Girl -->
	<!-- Carrusel Lanapelo -->
	<section class="main-content-carrusel">
		<h1 class="main-content-carrusel-title">
			<span>
				<img src="img/icons/lanapelo.png" class="main-content-carrusel-title-icon" alt="">
				Lanapelos						
			</span>
			<div class="main-content-carrusel-title-divisor"></div>
			<a href="lanapelos">Ver todos</a>
		</h1>

		<section class="main-content-carrusel-products">
			<!-- Control left -->
			<div class="controles control-left control-carrusel-left" >
				<div class="control-icon">
					<a class="control-icon-link" data-direccion="left" data-id-carrusel="1" href="#"></a>
					<i class="fa fa-chevron-left"></i>
				</div>
			</div>

			<!-- Contenedor de productos del carrusel -->
			<div class="main-content-carrusel-products-content carrusel-1">
				@foreach($productos_lanapelos as $producto)
					<div class="card product-card">
						<img src='{{ asset("img/$producto->ruta") }}' class="card-img-top" alt="...">
						<div class="card-body">
						    <h5 class="card-title text-center">{{ $producto->nombre }} Color {{ $producto->color }}</h5>
						    <span class="card-quantity">{{ $producto->unidades }} unidad | {{ $producto->longitud }} x und</span>
						    <span class="card-price">${{ $producto->precio }}</span>
						    <p class="card-text"></p>
						    <a class="btn btn-primary text-center card-btn btnSetCantidad" 
							    data-toggle="modal"
							    data-target="#modalCantidadProducto"
							    data-nombre="{{$producto->nombre}}"
							    data-precio="{{$producto->precio}}"
							    data-color="{{$producto->color}}">
								PEDIRLO
							</a>
						</div>
					</div>
				@endforeach
			</div>

			<!-- Control right -->
			<div class="controles control-right control-carrusel-right" >
				<div class="control-icon">
					<a class="control-icon-link" data-direccion="right" data-id-carrusel="1" href="#"></a>
					<i class="fa fa-chevron-right"></i>
				</div>
			</div>
		</section>
	</section>

	<!-- Carrusel Kanekalon -->
	<section class="main-content-carrusel">

		<h1 class="main-content-carrusel-title">
			<span>
				<img src="img/icons/kanekalon.png" class="main-content-carrusel-title-icon" alt="">
				Kanekalon 						
			</span>
			<div class="main-content-carrusel-title-divisor"></div>
			<a href="kanekalon">Ver todos</a>
		</h1>

		<section class="main-content-carrusel-products">
			<!-- Control left -->
			<div class="controles control-left control-carrusel-left" >
				<div class="control-icon">
					<a class="control-icon-link" data-direccion="left" data-id-carrusel="2" href="#"></a>
					<i class="fa fa-chevron-left"></i>
				</div>
			</div>

			<div class="main-content-carrusel-products-content carrusel-2">				
				@foreach($productos_kanekalon as $producto)
					<div class="card product-card">
						<img src='{{ asset("img/$producto->ruta") }}' class="card-img-top" alt="...">
						<div class="card-body">
						    <h5 class="card-title text-center">{{ $producto->nombre }} Color {{ $producto->color }}</h5>
						    <span class="card-quantity">{{ $producto->unidades }} unidad | {{ $producto->longitud }} x und</span>
						    <span class="card-price">${{ $producto->precio }}</span>
						    <p class="card-text"></p>
						    <a class="btn btn-primary text-center card-btn btnSetCantidad" 
							    data-toggle="modal"
							    data-target="#modalCantidadProducto"
							    data-nombre="{{$producto->nombre}}"
							    data-precio="{{$producto->precio}}"
							    data-color="{{$producto->color}}">
								PEDIRLO
							</a>
						</div>
					</div>
				@endforeach
			</div>

			<!-- Control right -->
			<div class="controles control-right control-carrusel-right">
				<div class="control-icon">
					<a class="control-icon-link" data-direccion="right" data-id-carrusel="2" href="#"></a>
					<i class="fa fa-chevron-right"></i>
				</div>
			</div>
		</section>
	</section>

	<!-- Carrusel Accesorios -->
	<section class="main-content-carrusel">
		<h1 class="main-content-carrusel-title">
			<span>
				<img src="img/icons/accesorios.png" class="main-content-carrusel-title-icon" alt="">
				Accesorios						
			</span>
			<div class="main-content-carrusel-title-divisor"></div>
			<a href="accesorios">Ver todos</a>
		</h1>

		<section class="main-content-carrusel-products">
			<!-- Control left -->
			<div class="controles control-left control-carrusel-left" >
				<div class="control-icon">
					<a class="control-icon-link" data-direccion="left" data-id-carrusel="3" href="#"></a>
					<i class="fa fa-chevron-left"></i>
				</div>
			</div>

			<div class="main-content-carrusel-products-content carrusel-3">				
				@foreach($productos_accesorios as $producto)
					<div class="card product-card">
						<img src='{{ asset("img/$producto->ruta") }}' class="card-img-top" alt="...">
						<div class="card-body">
						    <h5 class="card-title text-center">{{ $producto->nombre }} Color {{ $producto->color }}</h5>
						    <span class="card-quantity">{{ $producto->unidades }} unidad | {{ $producto->longitud }} x und</span>
						    <span class="card-price">${{ $producto->precio }}</span>
						    <p class="card-text"></p>
						    <a class="btn btn-primary text-center card-btn btnSetCantidad" 
							    data-toggle="modal"
							    data-target="#modalCantidadProducto"
							    data-nombre="{{$producto->nombre}}"
							    data-precio="{{$producto->precio}}"
							    data-color="{{$producto->color}}">
								PEDIRLO
							</a>
						</div>
					</div>
				@endforeach
			</div>

			<!-- Control right -->
			<div class="controles control-right control-carrusel-right">
				<div class="control-icon">
					<a class="control-icon-link" data-direccion="right" data-id-carrusel="3" href="#"></a>
					<i class="fa fa-chevron-right"></i>
				</div>
			</div>
		</section>
	</section>

	<!-- Carrusel Moños -->
	<section class="main-content-carrusel">
		<h1 class="main-content-carrusel-title">
			<span>
				<img src="img/icons/colas.png" class="main-content-carrusel-title-icon" alt="">
				Colas ò Moños
			</span>
			<div class="main-content-carrusel-title-divisor"></div>
			<a href="colas">Ver todos</a>
		</h1>

		<section class="main-content-carrusel-products">
			<!-- Control left -->
			<div class="controles control-left control-carrusel-left" >
				<div class="control-icon">
					<a class="control-icon-link" data-direccion="left" data-id-carrusel="4" href="#"></a>
					<i class="fa fa-chevron-left"></i>
				</div>
			</div>

			<div class="main-content-carrusel-products-content carrusel-4">				
				@foreach($productos_colas as $producto)
					<div class="card product-card">
						<img src='{{ asset("img/$producto->ruta") }}' class="card-img-top" alt="...">
						<div class="card-body">
						    <h5 class="card-title text-center">{{ $producto->nombre }} Color {{ $producto->color }}</h5>
						    <span class="card-quantity">{{ $producto->unidades }} unidad | {{ $producto->longitud }} x und</span>
						    <span class="card-price">${{ $producto->precio }}</span>
						    <p class="card-text"></p>
						    <a class="btn btn-primary text-center card-btn btnSetCantidad" 
							    data-toggle="modal"
							    data-target="#modalCantidadProducto"
							    data-nombre="{{$producto->nombre}}"
							    data-precio="{{$producto->precio}}"
							    data-color="{{$producto->color}}">
								PEDIRLO
							</a>
						</div>
					</div>
				@endforeach
			</div>

			<!-- Control right -->
			<div class="controles control-right control-carrusel-right">
				<div class="control-icon">
					<a class="control-icon-link" data-direccion="right" data-id-carrusel="4" href="#"></a>
					<i class="fa fa-chevron-right"></i>
				</div>
			</div>
		</section>
	</section>


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
@endsection

