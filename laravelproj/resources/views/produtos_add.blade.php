@extends('layout.app')

@section('content')

<div class="container">

    @if ($errors->count())
    <ul>@foreach ($errors->all() as $error)
      <li>{{ $error}}</li>
      @endforeach
    </ul>
      @endif
    <h1>Adicionar Produtos</h1>

    <form action="/produtos/add" method="POST">

      {{ csrf_field() }}

      <label>Código do Produto</label><br>
      <input type="text" name="sku"><br>
      <label>Nome do Produto</label><br>
      <input type="text" name="nomeProduto"><br>
      <label>Descrição do Produto</label><br>
      <input type="text" name="descricaoProduto"><br>
      <label>Unidade de Medida</label><br>
      <input type="text" name="unidMedida"><br>
      <label>Foto do Produto</label><br>
      <input type="text" name="img"><br><br><br>


      <button type="submit">Adicionar</button>

    </form>

  </div>
  
  @stop