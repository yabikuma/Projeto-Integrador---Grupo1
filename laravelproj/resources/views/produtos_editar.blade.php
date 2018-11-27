@extends('layout.app')

@section('content')

<div class="container">

    @if ($errors->count())
    <ul>@foreach ($errors->all() as $error)
      <li>{{ $error}}</li>
      @endforeach
    </ul>
      @endif
    <h1>Editar Produto</h1>

    <form action="/produtos/editar/{{ $produto->idProduto }}" method="POST">

      {{ csrf_field() }}
      {{ method_field('PUT') }}

      <label>Dados da Produto</label><br>
     
      
      <input type="text" name="sku" value='{{  $produto->sku }}'><br>
      
      <input type="text" name="nomeProduto" value='{{  $produto->nomeProduto }}'><br>
      
      <input type="text" name="descricaoProduto" value='{{  $produto->descricaoProduto }}'><br>
      
      <input type="text" name="unidMedida" value='{{  $produto->unidMedida }}'><br>
      
      <input type="text" name="img" value='{{  $produto->img }}'><br><br><br>



      <button type="submit">Editar</button>

    </form>

  </div>

  @stop