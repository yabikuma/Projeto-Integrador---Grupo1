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

    <form action="/produtos/add" method="POST" enctype="multipart/form-data">

      {{ csrf_field() }}

      {{method_field('POST')}}

      <label>Código do Produto</label><br>
      <input type="text" name="sku"><br>
      <label>Nome do Produto</label><br>
      <input type="text" name="nomeProduto"><br>
      <label>Descrição do Produto</label><br>
      <input type="text" name="descricaoProduto"><br>
      <label>Categoria</label><br>
      <input type="text" name="idCategoria"><br>
      <label>Unidade de Medida</label><br>
      <input type="text" name="unidMedida"><br>
      <label>Foto do Produto</label><br>
      <input type="file" name="img"><br><br>


      <button type="submit">Adicionar</button>
      <button type="submit"><a href="/produtos">Voltar</a></button>

    </form>

  </div>
  
  @stop