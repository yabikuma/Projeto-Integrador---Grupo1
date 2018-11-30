<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Categorias;

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


            $arquivo = $request->file('img');
            if (empty($arquivo)) {
            abort(400, 'Nenhum arquivo foi enviado');
            }
            // salvando
            $nomePasta ='produto';
            $arquivo->storePublicly($nomePasta);
            $caminho = public_path()."\\storage\\$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName();
            // movendo
            $arquivo->move($caminho, $nomeArquivo);
            // return view('imagem')->with('caminho', $caminho)->with('nomeArquivo', $nomeArquivo)->with('nomePasta', $nomePasta);
            // }

            $produto = Produtos::create([

            'sku'=>$request->input('sku'),
            'nomeProduto'=>$request->input('nomeProduto'),
            'descricaoProduto'=>$request->input('descricaoProduto'),
            'unidMedida'=>$request->input('unidMedida'),
            'idCategoria'=>$request->input('idCategoria'),
            'img'=>"storage/$nomePasta/$nomeArquivo"


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

            $arquivo = $request->file('img');
            if (empty($arquivo)) {
            abort(400, 'Nenhum arquivo foi enviado');
            }
            // salvando
            $nomePasta ='produto';
            $arquivo->storePublicly($nomePasta);
            $caminho = public_path()."\\storage\\$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName();
            // movendo
            $arquivo->move($caminho, $nomeArquivo);
            // return view('imagem')->with('caminho', $caminho)->with('nomeArquivo', $nomeArquivo)->with('nomePasta', $nomePasta);
            // }



            $produto = Produtos::find($id);
            $produto->sku = $request->input('sku');
            $produto->nomeProduto = $request->input('nomeProduto');
            $produto->descricaoProduto = $request->input('descricaoProduto');
            $produto->unidMedida = $request->input('unidMedida');
            $produto->img = "storage/$nomePasta/$nomeArquivo";




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




        public function exibirprodutos($id){
            $produtos =Produtos::where('idCategoria','=',$id)->paginate(4);

            $categorias =Categorias::where('idCategoria','=',$id)->first();


            return view('produtos_lista',['produtos'=>$produtos,'categorias'=>$categorias]);

            
          }




          public function exibirproduto_detalhe($id){

              $produto =Produtos::where('idProduto','=',$id)->first();

              return view('produto_detalhe',['produto'=>$produto,]);


            }


          }





