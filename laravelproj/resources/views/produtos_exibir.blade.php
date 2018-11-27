@extends('layout.app')

@section('content')

<div class="container custom-container">

  <h1>Lista de Produtos</h1>

  <h2><a href="/produtos/add/">Adicionar Produto</a></h2>


    <ul>
      @foreach ($produtos as $produto)

      <li>{{ ' codigo produto -'. $produto->sku .' nome do produto - '. $produto->nomeProduto  .' '. $produto->descricaoProduto .' '. $produto->unidMedida.' '. $produto->img}}

      <a href="/produtos/editar/{{ $produto->idProduto }}">Editar</a>
      <a href="/produtos/excluir/{{ $produto->idProduto }}">Excluir</a>

      </li>
      @endforeach
    </ul>

</div>
@stop