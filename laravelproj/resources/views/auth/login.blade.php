@extends('layout.app')

@section('content')
<<<<<<< HEAD

    <div class="container">
    <div class="text-center loginw">
      <form class="form-signin" action="/login" method="post">
        <!-- <h1 class="h3 font-weight-normal">Fazer Login</h1> -->
        <h1 class="logintitle">Fazer Login</h1>


        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        @csrf
        <input type="email" name="email" id="inputEmail" class="form-control mb-4" value='<?php echo isset($_COOKIE['email'])?$_COOKIE['email']:''; ?>'  placeholder="E-mail">

        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" autofocus>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" name="lembrar-usuario" id="lembrar-usuario"> Lembre-me
          </label>
=======
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
>>>>>>> 3aaae766d0e1de0d75350b77a933ab9760783a39
        </div>




        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->


      </form>
      </div>

  </div>


@stop





@extends('layouts.app')
