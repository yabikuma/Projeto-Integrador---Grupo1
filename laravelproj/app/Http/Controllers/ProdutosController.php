<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ProdutosController extends Controller
{
    public function exibir(){
        $produtos =Produtos::all();
         
        return view('produtos_exibir')->with('produtos',$produtos);
      }

    public function novo(){
      return view ('produtos_add');
    }


    public function adicionar(Request $request){

        //$request->validate(['nome' => 'require|unique:categoria|max:10']);
  
        $produto = Produtos::create([
  
            
            'sku'=>$request->input('sku'),
            'nomeProduto'=>$request->input('nomeProduto'),
            'descricaoProduto'=>$request->input('descricaoProduto'),
            'unidMedida'=>$request->input('unidMedida'),
            'img'=>$request->input('img'),

            //'ultima_atualizacao' => 19/10/2018
        ]);
        $produto->save();
        //return 'Categoria Incluida';
        return redirect('produtos');
      }

      public function editar($id){
        $produto = Produtos::find($id);
        return view('produtos_editar')->with('produto', $produto);
        }


        public function editarProduto(Request $request, $id){
            //$request->validate(['nome' => 'required|min:2|unique:categoria']);
        
            $produto = Produtos::find($id);
            $produto->sku = $request->input('sku');
            $produto->nomeProduto = $request->input('nomeProduto');
            $produto->descricaoProduto = $request->input('descricaoProduto');
            $produto->unidMedida = $request->input('unidMedida');
            $produto->img = $request->input('img');

            $produto->save();
        
            return redirect('produtos');
            }
        

        public function excluir($id){
            $produto = Produtos::find($id);
            return view('produtos_excluir')->with('produto', $produto);
          
        }
          
        public function excluirProduto($id){
            $produto = Produtos::find($id);
            $produto->delete();
          
            return redirect('produtos');
        }

}
