@extends('layout.app')

@section('content')

  <div class="container">

  <div class="cadastro">

    <h1 id=topo>Criar Conta</h1>

    <!-- IMPRIME NA TELA A VALIDAÇÃO DE PREENCHIMENTO DO FORMULÁRIO -->

      <?php if (isset($msg_error) && count($msg_error)) : ?>
        <div class="error col-5" >
          <?php echo implode ("<br>", $msg_error); ?>
        </div>
      <?php endif; ?>



  <form class="cadastroform" action="/cadastro" method="post"  enctype="multipart/form-data">

    <label for="nome">Seu nome</label><br>
    <input class="form-control" type="text" name="nome" value='<?php echo isset($_POST['nome'])?$_POST['nome']:''; ?>'>

    <label for="email">E-mail</label><br>
    <input class="form-control" type="text" name="email" value='<?php echo isset($_POST['email'])?$_POST['email']:''; ?>'>

    <label for="senha">Senha</label><br>
    <input class="form-control" type="password" name="senha" value='<?php echo isset($_POST['senha'])?$_POST['senha']:''; ?>'>
    <!-- <p>* As senhas devem ter pelo menos 6 caracteres.</p> -->

    <label for="confsenha">Inserir a senha nova mais um vez</label><br>
    <input class="form-control" type="password" name="confsenha" value='<?php echo isset($_POST['confsenha'])?$_POST['confsenha']:''; ?>' ><br>

    <!-- <label class= "p-3 mb-2 bg-dark text-white.bg-dark" for="arquivo">Adicionar foto de perfil</label><br><br> -->

    <input type="file" class="btn botao form-control" name="arquivo" id="arquivo" value=""><br>

    <label>Preferências:</label><br>

    <?php
    $preferencias = isset($_POST['preferencias'])?$_POST['preferencias']:[];
    ?>

    <input type="checkbox" name="preferencias[]" id="moedas" value="moedas" <?php echo in_array('moedas', $preferencias)?'checked':''; ?> >
    <label for="moedas">Moedas</label>
    <input type="checkbox" name="preferencias[]" id="vinil" value="vinil" <?php echo in_array('vinil', $preferencias)?'checked':''; ?> >
    <label for="vinil">Vinil</label>
    <input type="checkbox" name="preferencias[]" id="videogames" value="videogames" <?php echo in_array('videogames', $preferencias)?'checked':''; ?> >
    <label for="videogames">Video Games</label>
    <input type="checkbox" name="preferencias[]" id="brinquedos" value="brinquedos" <?php echo in_array('brinquedos', $preferencias)?'checked':''; ?> >
    <label for="brinquedos">Brinquedos</label><br>


    <button class="btn botao form-control" type="submit">Criar sua senha na GenVintage</button>



  </form>

</div>

</div>

@stop
