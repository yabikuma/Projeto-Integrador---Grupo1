@extends('layout.app')

@section('content')

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

{{$produto->nomeProduto}}
  <p id="nome_produto" class="bg-dark text-white text-uppercase">{{$produto->nomeProduto}}</p>

  <div class="container">
      <div class="row">
          <!-- Image -->
          <div class="col-12 col-lg-6">
              <div class="card bg-light mb-3">
                  <div class="card-body">
                      <a href="" data-toggle="modal" data-target="#productModal">
                          <img class="img-fluid" src="https://dummyimage.com/800x800/55595c/fff" />
                          <p class="text-center">Zoom</p>
                      </a>
                  </div>
              </div>
          </div>

          <!-- Add to cart -->
          <div class="col-12 col-lg-6 add_to_cart_block">
              <div class="card bg-light mb-3">
                  <div class="card-body">
                      <p class="price">R$ 99.00 </p>
                      <p class="price_discounted">R$ 149.90 </p>
                      <form method="get" action="cart.html">
                            <div class="form-group">
                              <label>Quantidade :</label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                          <i class="fa fa-minus"></i>
                                      </button>
                                  </div>
                                  <input type="text" class="form-control"  id="quantity" name="quantity" min="1" max="100" value="1">
                                  <div class="input-group-append">
                                      <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                          <i class="fa fa-plus"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <a href="cart.html" class="btn btn-success btn-lg btn-block text-uppercase">
                              <i class="fa fa-shopping-cart"></i> Adicionar ao Carrinho
                          </a>
                      </form>
                      <div class="product_rassurance">
                          <ul class="list-inline">
                              <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br/>Entrega</li>
                              <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br/>Pagamento</li>
                              <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br/>Contato</li>
                          </ul>
                      </div>
                      <div class="reviews_product p-3 mb-2 ">
                          3 avaliações
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          (4/5)
                          <a class="pull-right" href="#reviews">Ver todas as avaliações</a>
                      </div>
                    </div>
              </div>
          </div>
      </div>

      <div class="row">
          <!-- Description -->
          <div class="col-12">
              <div class="card border-light mb-3">
                  <div class="card-header bg-dark text-white text-uppercase"><i class="fa fa-align-justify"></i> Descrição</div>
                  <div class="card-body">
                      <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices vitae libero et scelerisque. Pellentesque sit amet ante feugiat, dapibus nisi eu, rutrum arcu. Nunc iaculis eleifend metus, sit amet vulputate elit sodales at. Mauris posuere augue nec ex aliquam, et gravida lorem faucibus. Etiam nulla purus, feugiat vitae sapien non, dignissim suscipit elit. Suspendisse vel neque in nulla vulputate bibendum. Etiam euismod accumsan posuere.


                      </p>
                      <p class="card-text">
                        Duis ante magna, posuere id dapibus eget, fermentum semper est. Curabitur venenatis in justo vitae vehicula. Sed mollis ultricies dui, nec rutrum augue commodo sed. Nullam volutpat, tortor ut ultrices pharetra, enim sapien hendrerit odio, at lacinia elit sapien vel ipsum. Vivamus elementum lacus gravida purus bibendum fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse eget magna consequat, vestibulum ligula vitae, aliquam ante.


                      </p>
                  </div>
              </div>
          </div>

          <!-- Reviews -->
          <div class="col-12" id="reviews">
              <div class="card border-light mb-3">
                  <div class="card-header bg-dark text-white text-uppercase"><i class="fa fa-comment"></i> Avaliações</div>
                  <div class="card-body">
                      <div class="review">
                          <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                          <meta itemprop="datePublished" content="01-01-2016">January 01, 2018

                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>
                          por Paul Smith
                          <p class="blockquote">
                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum consequat viverra. Donec volutpat ex purus, nec accumsan mi varius.</p>
                          </p>
                          <hr>
                      </div>
                      <div class="review">
                          <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                          <meta itemprop="datePublished" content="01-01-2016">January 01, 2018

                          <span class="fa fa-star" aria-hidden="true"></span>
                          <span class="fa fa-star" aria-hidden="true"></span>
                          <span class="fa fa-star" aria-hidden="true"></span>
                          <span class="fa fa-star" aria-hidden="true"></span>
                          <span class="fa fa-star" aria-hidden="true"></span>
                          por Paul Smith
                          <p class="blockquote">
                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus at nunc rhoncus pulvinar. Donec.

</p>
                          </p>
                          <hr>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

@stop

