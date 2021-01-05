<h1>FORMULARIO en LARAVEL</h1>
<form action="{{action('PeliculaControler@recibir')}}" method="POST">
	{{csrf_field() }}
	<label for="nombre">NOMBRE:</label>
	<input type="text" name="nombre"/>
	<br>
	<label for="email">CORREO:</label>
	<input type¨="text" name="email"/>
	<br>
	<input type="submit" name="Enviar"/>

</form>