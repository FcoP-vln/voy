<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    echo "<h1>HOLA MUNDO</h1>";
    echo "<br/>";
	echo "<a href='mostrar-fecha'>Mostrar fecha</a>";
	echo "<br/>";
	echo "<a href='pelicula'>Película</a>";
});

Route::get('peliculas', 'PeliculaControler@index'
);
Route::get('detalle', 'PeliculaControler@detalle'
);

Route::resource('usuario', 'UsuarioControler');

Route::get('/formulario','PeliculaControler@formulario');

Route::post('/recibir','PeliculaControler@recibir');

//Rutas de frutas
Route::group(['prefix'=>'frutas'], function(){
	Route::get('index','FrutaController@index');
	Route::get('detail/{id}','FrutaController@detail');
	Route::get('crear','FrutaController@create');
	Route::post('save','FrutaController@save' );
	Route::get('delete/{id}','FrutaController@delete');
	Route::get('editar/{id}','FrutaController@edit');
	Route::post('update','FrutaController@update');
});


  
/*Route::get('/mostrar-fecha', function() {
	return view('mostrar-fecha');

});
/*Route::get('/pelicula/{titulo?}', function($titulo= 'No hay ni pija'){
	return view('pelicula', array('titulo'=> $titulo));
});
/*Route::get('/pelicula/{titulo}/{year?}', function($titulo= 'No hay ni pija', $year=2019){
	return view('pelicula', array('titulo'=> $titulo, 'year'=>$year));
})->where(array(
	'titulo' => '[a-zA-Z]+',
	'year' => '[0-9]+'
));

Route::get('/listado-peliculas',function(){
	$titulo = "Listado de películas";
	return view('peliculas.listado', array('titulo'=>$titulo
));
});

Route::get('/listado-peliculas', function(){

	$titulo = "Listado de películas";
	$listado = array('Batman', 'Spiderman', 'Gran Torino');
	return view('peliculas.listado')
	->with('titulo', $titulo)
	->with('listado', $listado);
});

Route::get('/pagina-generica',function(){
	return view('pagina');
});*/