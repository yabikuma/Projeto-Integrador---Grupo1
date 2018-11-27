@extends('layout.app')
<<<<<<< HEAD
@section('content')

  <div class="container">

  <div class="cadastro">

    <h1 id=topo>Criar Conta</h1>

    <!-- IMPRIME NA TELA A VALIDAÇÃO DE PREENCHIMENTO DO FORMULÁRIO -->



  <form class="cadastroform" action="   " method="post"  enctype="multipart/form-data">

    {{ csrf_field() }}

    <label for="nome">Nome</label><br>
    <input class="form-control" type="text" name="nome">

    <label for="sobrenome">Sobrenome</label><br>
    <input class="form-control" type="text" name="sobrenome">

    <label for="telefone">Telefone</label><br>
    <input class="form-control" type="tel" name="telefone">

    <label for="celular">Celular</label><br>
    <input class="form-control" type="tel" name="celular">

    <label for="rg">RG</label><br>
    <input class="form-control" type="text" name="rg">

    <label for="cpf">CPF</label><br>
    <input class="form-control" type="text" name="cpf">

    <label for="email">E-mail</label><br>
    <input class="form-control" type="text" name="email">

    <label for="senha">Senha</label><br>
    <input class="form-control" type="password" name="senha">
    <!-- <p>* As senhas devem ter pelo menos 6 caracteres.</p> -->

    <label for="confsenha">Inserir a senha nova mais um vez</label><br>
    <input class="form-control" type="password" name="confsenha">

    <!-- <label class= "p-3 mb-2 bg-dark text-white.bg-dark" for="arquivo">Adicionar foto de perfil</label><br><br> -->

    <input type="file" class="btn botao form-control" name="arquivo" id="arquivo" value=""><br>


                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif


    <label>Preferências:</label><br>

    <input type="checkbox" name="preferencias[]" id="moedas" value="moedas">
    <label for="moedas">Moedas</label>
    <input type="checkbox" name="preferencias[]" id="vinil" value="vinil">
    <label for="vinil">Vinil</label>
    <input type="checkbox" name="preferencias[]" id="videogames" value="videogames">
    <label for="videogames">Video Games</label>
    <input type="checkbox" name="preferencias[]" id="brinquedos" value="brinquedos">
    <label for="brinquedos">Brinquedos</label><br>


    <button class="btn botao form-control" type="submit">Criar sua conta na GenVintage</button>





  </form>

</div>

=======

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                       
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
>>>>>>> 3aaae766d0e1de0d75350b77a933ab9760783a39
</div>

@stop
