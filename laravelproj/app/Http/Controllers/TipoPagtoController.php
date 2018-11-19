<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoPagto;

class TipoPagtoController extends Controller
{
    public function exibir(){
        $tipopagto =TipoPagto::all();
         
        return view('tipopagto_exibir')->with('tipopagto',$tipopagto);
      }
}
