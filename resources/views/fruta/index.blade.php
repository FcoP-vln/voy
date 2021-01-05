<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h1>Listado de Frutas</h1>
<h3><a href="{{action('FrutaController@create')}}">Crear Fruta</a></h3>

@if(session('status'))
<p style="background: green; color:white">
	{{session('status')}}
</p>
@endif

<ul>
	@foreach($frutas as $fruta)	

	<li>
		<a href="{{action('FrutaController@detail', ['id' => $fruta->id])}}">
			{{$fruta->nombre}}
		</a>
	</li>
	@endforeach
</ul>