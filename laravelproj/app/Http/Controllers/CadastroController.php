<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class CadastroController extends Controller
{
    public function cadastrarUsuario(){

      return view('cadastro');
    }



    public function adicionarUsuario(Request $request)
{
       $input = $request->all();

      $request->validate([
        'nome' => 'required',
        'sobrenome' => 'required',
        'telefone' => 'required',
        'celular' => 'required',
        'rg' => 'required',
        'cpf' => 'required',
        'email' => 'required',
        'senha' => 'required',
        'confsenha' => 'required',
  ]);

}
}
