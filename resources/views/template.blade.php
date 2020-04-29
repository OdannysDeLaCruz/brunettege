<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta data-n-head="true" http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Yield para meta etiquetas personalizadas por paginas -->
	@yield('metas')

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" integrity="sha384-ZbbbT1gw3joYkKRqh0kWyRp32UAvdqkpbLedQJSlnI8iLQcFVxaGyrOgOJiDQTTR" crossorigin="anonymous"></script>
	<link rel="stylesheet" href='{{ asset("css/style.css") }}'>
	<link rel="stylesheet" href='{{ asset("css/media-query.css") }}'>
	<!-- Este yield permite incluir archivos personalizados por paginas-->
	@yield('head-alternativo')
	<title>@yield('title') {{ env('APP_NAME') }}</title>
</head>
<body>

	@include('includes.header')
	<section class="row main">
		@include('includes.sidebar')

		<section class="col-12 col-lg-10 offset-lg-2 main-content">

			@yield('main-content')

		</section>
	</section>

	<!-- Modal escoger cantidad -->
	@include('includes.modalCantidad')

	@include('includes.scripts')	
</body>
</html>