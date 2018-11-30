@extends('layout.app')

@section('content')
<div class="container">

<div class="cadastro">

  <h1 id=topo>Criar Conta</h1>


                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="idTipoPessoa" class="col-md-4 col-form-label text-md-right">{{ __('idTipoPessoa') }}</label>

                            <div class="col-md-6">
                                <input id="idTipoPessoa" type="text" class="form-control{{ $errors->has('idTipoPessoa') ? ' is-invalid' : '' }}" name="idTipoPessoa" value="{{ old('idTipoPessoa') }}" required autofocus>

                                @if ($errors->has('idTipoPessoa'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" required autofocus>

                                @if ($errors->has('nome'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="sobrenome" class="col-md-4 col-form-label text-md-right">{{ __('sobrenome') }}</label>

                            <div class="col-md-6">
                                <input id="sobrenome" type="text" class="form-control{{ $errors->has('sobrenome') ? ' is-invalid' : '' }}" name="sobrenome" value="{{ old('sobrenome') }}" required autofocus>

                                @if ($errors->has('sobrenome'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sobrenome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="CPF_CNPJ" class="col-md-4 col-form-label text-md-right">{{ __('CPF/CNPJ') }}</label>

                            <div class="col-md-6">
                                <input id="CPF_CNPJ" type="text" class="form-control{{ $errors->has('CPF_CNPJ') ? ' is-invalid' : '' }}" name="CPF_CNPJ" value="{{ old('CPF_CNPJ') }}" required autofocus>

                                @if ($errors->has('CPF_CNPJ'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('CPF_CNPJ') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="telefone1" class="col-md-4 col-form-label text-md-right">{{ __('Telefone1') }}</label>

                            <div class="col-md-6">
                                <input id="telefone1" type="text" class="form-control{{ $errors->has('telefone1') ? ' is-invalid' : '' }}" name="telefone1" value="{{ old('telefone1') }}" required autofocus>

                                @if ($errors->has('telefone1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefone1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular') }}" required autofocus>

                                @if ($errors->has('celular'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

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


                        <input type="file" class="col-md-4 col btn botao form-control" name="arquivo" id="arquivo" value="">

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
</div>
@endsection
