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

  <form class="cadastroform" action="cadastro.php" method="post">


    <label for="nome">Seu nome</label><br>
    <input class="form-control" type="text" name="nome" value="" required><br>

    <label for="email">E-mail</label><br>
    <input class="form-control" type="text" name="email" value="" required><br>

    <label for="senha">Senha</label><br>
    <input class="form-control" type="password" name="senha" value="" required>
    <p>* As senhas devem ter pelo menos 6 caracteres.</p>

    <label for="confsenha">Inserir a senha nova mais um vez</label><br>
    <input class="form-control" type="password" name="confsenha" value="" required><br>

    <label>Preferências:</label><br>
    <input type="checkbox" name="preferencias" id="moedas" value="moedas">
    <label for="moedas">Moedas</label>
    <input type="checkbox" name="preferencias" id="vinil" value="vinil">
    <label for="vinil">Vinil</label>
    <input type="checkbox" name="preferencias" id="videogames" value="videogames">
    <label for="videogames">Video Games</label>
    <input type="checkbox" name="preferencias" id="brinquedos" value="brinquedos">
    <label for="brinquedos">Brinquedos</label>

    <br>  <br>

    <button class="btn btn-primary form-control" type="submit">Criar sua senha na GenVintage</button>

  </form>



</div>
<?php include 'footer.php' ?>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
