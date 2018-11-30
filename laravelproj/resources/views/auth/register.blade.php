@extends('layout.app')
@section('content')

<div class="container">

<div class="cadastro">

  <h1 id=topo>Criar Conta</h1>

                <div class="card-body">
                    <form method="POST" action="/cadastro" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <!-- <div class="form-group row">
                            <label id="idTipoPessoa" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="idTipoPessoa" type="text" class="form-control" name="idTipoPessoa" required autofocus>s
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Nome" required autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="sobrenome" class="col-md-4 col-form-label text-md-right">Sobrenome</label>

                            <div class="col-md-6">
                                <input id="sobrenome" type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required autofocus>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="CPF_CNPJ" class="col-md-4 col-form-label text-md-right">CPF</label>

                            <div class="col-md-6">
                                <input id="CPF_CNPJ" type="text" class="form-control" name="CPF_CNPJ" placeholder="00000000000" required autofocus>
                          </div>
                        </div>


                        <div class="form-group row">
                            <label for="telefone1" class="col-md-4 col-form-label text-md-right">Telefone</label>

                            <div class="col-md-6">
                                <input id="telefone1" type="text" class="form-control" name="telefone1" placeholder="00000000" required autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">Celular</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control" name="celular" placeholder="000000000" required autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="email@email.com" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirme a senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password"  placeholder="Confirme a Senha" required>
                            </div>
                        </div>

                        <input type="file" class="col-md-4 col btn botao form-control" name="arquivo">
                                @if (count($errors) > 0)
                                  <div class="alert alert-danger">
                                    <ul>
                                      @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                      @endforeach
                                    </ul>
                                  </div>
                                  @endif


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@stop
