@extends('layout.app')

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

</div>

@stop
