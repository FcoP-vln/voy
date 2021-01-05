
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="/bootstrap/app.php">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>CREAR</title>
</head>
<body>


@if(isset($fruta) && is_object($fruta))
	<h1>Editar fruta</h1>
@else
	<h1>Crear una fruta</h1>
@endif

<form action="{{isset($fruta) ? action('FrutaController@update'):action('FrutaController@save')}}" method="POST">
	{{csrf_field()}}

	@if(isset($fruta) && is_object($fruta))
		<input type="hidden" name="id" value="{{$fruta->id}}"/>
	@endif

	<label for="nombre">Nombre: </label>
	<input type="text" name="nombre" value="{{$fruta->nombre ?? ''}}"/>
	<br>
	<label for="descripcion">Descripción: </label>
	<input type="text" name="descripcion" value="{{$fruta->descripcion ?? ''}}"/>
	<br>
	<label for="precio">Precio: </label>
	<input type="number" name="precio" value="{{$fruta->precio ?? 0}}"/>
	<br>
	<input type="submit" value="Guardar"/>

</form>
</body>
</html>