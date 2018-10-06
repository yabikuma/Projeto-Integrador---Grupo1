<?php
    session_start();
    $_SESSION['logado']=false;
    if($_POST){
       $erros = [];
       foreach($_POST as $campo => $valor){
           if($valor === ''){
               $erros[] = "O campo $campo é obrigatório";
           }
       }
       if(!count($erros)){
               $usuariosJson = 'usuario.json';
               $usuarios = file_get_contents($usuariosJson);
               $usuarios = json_decode($usuarios, true);
               foreach($usuarios['usuarios'] as $key => $user){
                         if($_POST['email'] === $user['email'] && password_verify($_POST['senha'], $user['senha'])){
                             $_SESSION['logado']=true;
                             $_SESSION['id-usuario']=$key;
                             $_SESSION['nome-usuario']=$user['nome'];
                             $_SESSION['foto-usuario'] = $user['caminho'];
                             if($_POST['lembrar-usuario']){
                                 setcookie('email', $_POST['email'], time()+1000);
                                 setcookie('senha', $_POST['senha'], time()+1000);
                             } else {
                               setcookie('email', '', time()-1000);
                               setcookie('senha', '', time()-1000);
                             }
                             header('location: index.php');
                         }
                     }
                     $erros[] = "autenticação negada";
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
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>

  <body>
    <?php include 'header.php'?>
    <div class="container">
    <div class="text-center loginw">
      <form class="form-signin" action="login.php" method="post">
        <!-- <h1 class="h3 font-weight-normal">Fazer Login</h1> -->
        <h1 class="logintitle">Fazer Login</h1>
<?php if($_POST){
foreach ($erros as $key => $value) {
      echo $value;
}
}
?>

        <input type="email" name="email" id="inputEmail" class="form-control mb-4" value='<?php echo isset($_COOKIE['email'])?$_COOKIE['email']:''; ?>'  placeholder="E-mail">

        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" autofocus>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" name="lembrar-usuario" id="lembrar-usuario"> Lembre-me
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
