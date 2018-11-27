<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

class CategoriasController extends Controller
{
    public function exibir(){
        $categorias =Categorias::all();
         
        return view('categorias_exibir')->with('categorias',$categorias);
    }

}
