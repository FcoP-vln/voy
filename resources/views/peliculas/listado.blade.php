@include('includes.header')
<h1><?=$titulo?></h1>
<h2><?=$listado[1]?></h2>
<h2>{{$listado[0]}}</h2>

<p>{{date("Y")}}</p>

<h1>{!!date('Y')!!}</h1>

<!--comentario en blade-->

{{--COMENTARIO BLADE--}}

<br>

<?=isset($director) ? $director:"No hay ni porra";?>
<br>
<!--Mostrar si existe en blade-->

{{$director ?? "no existe"}}
<br>

@if($titulos??'')
<h1>Existe y es {{$titulos}}</h1>
@else
NO Existe!!
@endif
<br><br>
@for($i=1;$i<=5;$i++)
Número:{{$i}}<br/>
@endfor

<hr/>

@foreach($listado as $pelicula)
{{$pelicula}}<br>
@endforeach

<br>
@include('includes.footer')