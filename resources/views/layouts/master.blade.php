<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>ALUMAX - @yield('ALUMAX')</title>
</head>
<body>
	@section('header')
		<h1>CABECERA DE LA WEB(master)</h1>
	@show
	<hr>

	<div class="container">
		
		@yield('content')

	</div>

	<hr>
	@section('footer')
		<h1>PIE DE LA WEB(master)</h1>
	@show
</body>
</html>