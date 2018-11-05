<?php

session_start();
include_once("ClasseCadastro.php");

if ($_FILES && $_FILES['arquivo']['error']=== UPLOAD_ERR_OK) {
  $caminho = "img/usuario/". time() . $_FILES['arquivo']['name'];
  if (file_exists($caminho)) {
    // echo "ERRO: arquivo já existe";
  }else{
    $ok = move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminho);
    // if($ok){
    //   echo "Arquivo enviado com sucesso!";
    // }
  }
}


if ($_POST) {

  // CRIAR ARQUIVO COM OS DADOS DOS USUÁRIOS SALVOS NO FORMULÁRIO - ok, validado
  $local_file = "usuario.json";
  if (file_exists($local_file)){
    $conteudo = file_get_contents ("$local_file");
    $conteudo_array = json_decode ($conteudo, true);
  } else {
    $conteudo_array = [
      "usuarios" => []
    ];
  }


// VALIDAR O PREENCHIMENTO DO FORMULÁRIO - ok, validado!
  $msg_error = [];
  foreach ($_POST as $key => $value) {
    if ($value == ""){
      $msg_error[] = "Campo '$key' em branco";
    }
  }

  if($_POST['senha'] != $_POST['confsenha']){
    $msg_error[] = "Senhas não conferem!";
  }




// VALIDAR SE O USUÁRIO JÁ EXISTE, UTILIZANDO O CAMPO E-MAIL
$validacao = $conteudo_array['usuarios'];
if ($validacao !== null) {
foreach ($validacao as $key => $value) {
    if ($validacao[$key]['email'] === $_POST['email']) {
    $msg_error[] = "Já existe um cadastro em nossa base com esse e-mail!";
    break;
    }
  }
}

    // CARREGAR OS DADOS DO FORMULÁRIO CUMULATIVAMENTE(NA ÚLTIMA POSIÇÃO)
    // E SALVAR O ARQUIVO ACUMULADO NO ARQUIVO JSON ONDE TEM TODOS OS USUÁRIOS
  if (empty($msg_error)){

//$id = count($conteudo_array ["usuarios"])
      $dadosusuarios = [
            "nome" => $_POST['nome'],
            "email" => $_POST['email'],
            'senha'=>password_hash($_POST['senha'], PASSWORD_DEFAULT),
            "preferencias" => $_POST['preferencias'],
            "caminhofoto" => $caminho
          ];

      $conteudo_array ["usuarios"][] = $dadosusuarios;

      $conteudo = json_encode($conteudo_array,JSON_UNESCAPED_SLASHES);

      file_put_contents($local_file, $conteudo);

      $_SESSION['nome-usuario'] = $dadosusuarios["nome"];
      $_SESSION['email'] = $dadosusuarios["email"];

      setcookie('email', $_POST['email'], time()+1000);
      setcookie('senha', $_POST['senha'], time()+1000);

      header('Location: validacao.php');
      }


      // $usuario = new ClasseCadastro($_POST["tipoDePessoa"], $_POST);
      // $usuario->cadastrarUsuario();
}


 ?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>

<body>
  <?php include 'header.php'?>

  <div class="container">

  <div class="cadastro">

    <h1 id=topo>Criar Conta</h1>

    <!-- IMPRIME NA TELA A VALIDAÇÃO DE PREENCHIMENTO DO FORMULÁRIO -->

      <?php if (isset($msg_error) && count($msg_error)) : ?>
        <div class="error col-5" >
          <?php echo implode ("<br>", $msg_error); ?>
        </div>
      <?php endif; ?>



  <form class="cadastroform" action="cadastro.php" method="post"  enctype="multipart/form-data">

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
    <!-- <form class="uploadimg" action="upload.php" method="post" enctype="multipart/form-data"><br>
      <label class= "p-3 mb-2 bg-dark text-white.bg-dark" for="arquivo">Adicionar foto de perfil</label><br><br>
      <input type="file" class="btn btn-dark" name="arquivo" id="arquivo"><br><br>
    <button type="submit" class="btn btn-dark">Enviar</button>

  </form> -->

</div>
<?php include 'footer.php' ?>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
