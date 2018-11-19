@extends('layout.app')

@section('content')

<h1>Lista de Tipo de Pagamento</h1>

    <ul>
      @foreach ($tipopagto as $tipo)

      <li>{{ $tipo->descricaoTipoPagto }}

      </li>
      @endforeach
    </ul>

@stop