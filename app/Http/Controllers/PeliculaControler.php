<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PeliculaControler extends Controller
{
	public function index(){
		$titulo = 'Listado de mis pelis';

		return view('PELICULA.index', array('titulo'=>$titulo));
	}

	public function detalle(){
		return view('PELICULA.detalle');
	}

	public function formulario(){
		return view('PELICULA.formulario');

	}

	public function recibir(Request $request){
		$nombre=$request->input('nombre');
		$email=$request->input('email');

		return "El nombre es: $nombre y el email: $email";
		die();
	}

}
