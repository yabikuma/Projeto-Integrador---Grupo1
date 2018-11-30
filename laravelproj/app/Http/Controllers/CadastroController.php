<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;

class CadastroController extends Controller
{
    public function cadastrarUsuario(Request $request){
      // $input = $request->all();

      $arquivo = $request->file('arquivo');
      // if (empty($arquivo)) {
      //   abort(400, 'Nenhum arquivo foi enviado');
      // }
      // salvando
      $nomePasta = 'fotoUsuario';
      $arquivo->storePublicly($nomePasta);
      $caminho = public_path()."\\storage\\$nomePasta";
      $nomeArquivo = $arquivo->getClientOriginalName();
     // movendo
      $arquivo->move($caminho, $nomeArquivo);

      $usuario = User::create([
        'idTipoPessoa' => $request->input('idTipoPessoa'),
        'name' => $request->input('name'),
        'sobrenome' => $request->input('sobrenome'),
        'CPF_CNPJ' => $request->input('CPF_CNPJ'),
        'telefone1' => $request->input('telefone1'),
        'Celular' => $request->input('Celular'),
        'email' =>$request->input('email'),
        'password'=>$request->input('password'),
        'fotoUrl'=>"storage/$nomePasta/$nomeArquivo"
      ]);

      $usuario->save();

      return redirect('/login');

}
}
