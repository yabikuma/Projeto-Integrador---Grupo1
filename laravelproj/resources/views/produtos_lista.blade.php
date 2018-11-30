@extends('layout.app')

@section('content')


<div class="container">
    <h3 class="h3">{{$categorias->descricaoCategoria}}</h3>
    <div class="row">





      @foreach ($produtos as $produto)

     
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="/{{$produto->img}}">
                    </a>
                    
                    <a class="add-to-cart" href="">Add to cart</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    <span class="price">$599.99</span>
                </div>
            </div>
        </div>



@endforeach



    </div>

    <div class="col-xs-12"> 
    {{ $produtos->links()}}
    </div>

</div>






@stop