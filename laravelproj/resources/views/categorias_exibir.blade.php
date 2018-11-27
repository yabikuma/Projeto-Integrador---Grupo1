@extends('layout.app')

@section('content')

<div class="container custom-container">

    <h1>Lista de Categorias</h1>

        <ul>
            @foreach ($categorias as $categoria)

            <li>{{  $categoria->idCategoria .' '. $categoria->descricaoCategoria}}

            </li>
            @endforeach
        </ul>
</div>
@stop