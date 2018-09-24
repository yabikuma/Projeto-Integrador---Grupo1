<?php

 session_start();

if($_POST){
    if(isset($_POST['email']) && isset($_POST['senha'])){
      $arqJson = "usuario.json";
      $conteudo = file_get_contents($arqJson);
      $jsonParaArray = json_decode($conteudo, true);


      foreach($jsonParaArray as $usuario){
              if($_POST["email"] === $usuario && password_verify($_POST["senha"], $usuario)){
                $_SESSION['usuario-logado'] = true;
                $_SESSION['email-usuario'] = $usuario["email"];
                $_SESSION['senha-usuario'] = $usuario["senha"];

                echo "bem-vindo!";

                if(isset($_POST['lembrarUsuario'])) {
                  setcookie("email", $_POST ["email"]);
                }else{

                  setcookie('email', '', time()-3600);
                }
                header('Location:login.php');
              }

      }
    }
}

?>




<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

  <body>
    <?php include 'header.php'?>

    <div class="container">

    <div class="text-center loginw">

      <form class="form-signin" action="login.php" method="post">
        <!-- <h1 class="h3 font-weight-normal">Fazer Login</h1> -->
        <h1 class="logintitle">Fazer Login</h1>

        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control mb-4" name = "email" value= "<?php echo @$_COOKIE["email"];?>" placeholder="E-mail" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" name = "senha" value= "<?php echo @$_COOKIE["senha"];?>" placeholder="Senha" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Lembre-me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->


      </form>
      </div>



<?php include 'footer.php' ?>
  </div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
