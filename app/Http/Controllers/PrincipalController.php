<?php

namespace invista\Http\Controllers;

use Illuminate\Http\Request;
use invista\cidades;
use invista\estados;
use invista\categorias;
use invista\oportunidades;

class PrincipalController extends Controller
{
    public function index(){
		$estados = estados::all();
		$cidades = cidades::all();
		$categorias = categorias::all();
		$oportunidades = oportunidades::all();

		return view('index', compact('estados', 'cidades', 'categorias', 'oportunidades'));
    }
}
