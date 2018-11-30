@extends('layout.app')

@section('content')

    <div class="container">
    <div class="text-center loginw">
      <form class="form-signin" action="{{ route('login') }}" method="post">

        <h1 class="logintitle">Fazer Login</h1>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
      @endif

      @csrf

        <input type="email" name="email" class="form-control mb-4 {{ $errors->has('email') ? ' is-invalid' : '' }}" value= "{{ old('email') }}" placeholder="email@email.com" required autofocus>

        <input type="password" name="password" class="form-control mb-4 {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Senha" required>
        @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar
          </label>
        </div>




        <button class="btn btn-lg btn-primary btn-block" type="submit" {{ __('Login') }} >Entrar

      </button>




      </form>
      </div>

  </div>


@endsection
