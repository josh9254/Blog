<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home') | Blog</title>
	<link rel="stylesheet" href="{{ asset('css/general.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">

	<link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.5.0/css/font-awesome.min.css')}}">
</head>
<body>
	<header>
		@include('front.template.partials.header')

	</header>
	<div class="container">
		@yield('content')
		<footer>
			<hr>
			Todos los derechos reservados & copy {{ date('Y')}}
			<div class="pull-right">Blog Informativo</div>
		</footer>
	</div>
	<script src="{{ asset('plugins/jquery/js/jquery-2.2.0.js')}}"></script>
</body>
</html>