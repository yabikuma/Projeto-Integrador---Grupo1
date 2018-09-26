<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
  </head>
  <body>
<div class="container-fluid">


<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand mr-auto" href="#"><img src="../Projeto-Integrador---Grupo1/img/Gen-Vintage-logo_claro_small.png" alt="logo-header"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quem Somos</a>
      </li>

      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Categorias
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Moedas</a>
        <a class="dropdown-item" href="#">Vinil</a>
        <a class="dropdown-item" href="#">Video Games</a>
        <a class="dropdown-item" href="#">Brinquedos</a>
      </div>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="faq.php">FAQ</a>
      </li>
    </ul>
    <ul class="nav navbar-nav nav-link ml-auto" id="header-button-list">
      <?php if($_SESSION && $_SESSION["logado"]) : ?>

      <?php echo $_SESSION["nome-usuario"];  ?>

      <a href="logout.php">SAIR</a>
      <?php else: ?>
    <button type="submit" class="btn btn-info btn-xs btn-outline-light" id="header-button"
     ><a class="header-button-text" href="login.php">Login</a>
    </button>
     <button type="submit" class="btn btn-info btn-xs btn-outline-light" id="header-button"
     ><a class="header-button-text" href="cadastro.php">Sign in</a>
   </button>
 <?php endif; ?>

   </ul>
  </div>
</nav>
</div>
<!--Plu-glins do Bootstrap-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
