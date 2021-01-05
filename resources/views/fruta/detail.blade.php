

<H1>{{$fruta->nombre}}</H1>
<p>	
{{$fruta->descripcion}}
<br>
<br>
<h4>El precio es: 
{{$fruta->precio}}.Lps</h4>
</p>

<a href="{{action('FrutaController@delete', ['id'=>$fruta->id]) }}">Eliminar</a>
<a href="{{action('FrutaController@edit', ['id'=>$fruta->id]) }}">Actualizar</a>