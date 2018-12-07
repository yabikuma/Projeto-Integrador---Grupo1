@extends('layout.app')

@section('content')


<div class="container">
    <h3 class="h3">{{$categorias->descricaoCategoria}}</h3>
    <div class="row">





      @foreach ($produtos as $produto)

     
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="/produtos/detalhe/{{$produto->idProduto}}">
                        <img class="pic-1" src="/{{$produto->img}}">
                    </a>
                    
                    <!--<a class="add-to-cart" href="">Add to cart</a>-->
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$produto->nomeProduto}}</a></h3>
                    <span class="price">{{$produto->preco}}</span>
                </div>
            </div>
        </div>



@endforeach



    </div>

    <div class="pagination-centered"> 
    {{ $produtos->links()}}
    </div>

</div>






@stop