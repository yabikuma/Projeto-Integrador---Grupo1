@extends('layout.app')

@section('content')

<div class="container custom-container">

  <h1>Lista de Produtos</h1>

  <h2><a href="/produtos/add/">Adicionar Produto</a></h2>


  <table border="2">
  <tr>
  <td width="80" height="30">Código</td>
  <td width="200" height="30">Nome</td>
  <td width="50" height="30">Unid.</td>
  <td width="250" height="30">Imagem</td>
  <td width="50" height="30">Categoria</td>
  <td width="50" height="30">Preço</td>
  <td width="45" height="30">Editar</td>
  <td width="40" height="30">Excluir</td>
  </tr>
  @foreach ($produtos as $produto)
  <tr>
  <td>{{$produto->sku}}</td>
  <td>{{$produto->nomeProduto}}</td>
  <td>{{$produto->unidMedida}}</td>
  <td>{{$produto->img}}</td>
  <td>{{$produto->idCategoria}}</td>
  <td>{{$produto->preco}}</td>
  <td><a href="/produtos/editar/{{ $produto->idProduto }}">Editar</a></td>
  <td><a href="/produtos/excluir/{{ $produto->idProduto }}">Excluir</a></td>
  @endforeach
  </tr>
  </table>
     
      
 

</div>
@stop