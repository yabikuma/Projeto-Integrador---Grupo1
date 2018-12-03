@extends('layout.app')

@section('content')

<div class="container">

    <h1>Excluir Produto</h1>

    <form action="/produtos/excluir/{{ $produto->idProduto }}" method="POST">

      {{ csrf_field() }}
      {{ method_field('DELETE') }}

      <label>Dados da Produto</label><br>
     
      
     <input type="text" name="sku" value='{{  $produto->sku }}'><br>
     
     <input type="text" name="nomeProduto" value='{{  $produto->nomeProduto }}'><br>
     
     <input type="text" name="descricaoProduto" value='{{  $produto->descricaoProduto }}'><br>
     
     <input type="text" name="unidMedida" value='{{  $produto->unidMedida }}'><br>
     
     <input type="text" name="img" value='{{  $produto->img }}'><br><br><br>


      <button type="submit">Excluir</button>
      <button type="submit"><a href="/produtos">Voltar</a></button>

    </form>

  </div>

    @stop