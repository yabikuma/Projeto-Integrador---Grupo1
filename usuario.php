<?php
if(isset($_POST['senha'])){
  if($_POST['senha']){
    header("Location:cadastro.php?error=true");
  }
}
 ?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> Usuário </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

  <body>


      <?php include 'header.php'?>



      <?php

      foreach ($_SESSION as $key => $value) {
           echo "$key: $value";
         }
           if (isset($_SESSION['nomeUsuario'])) {
             $nome=$_SESSION['nomeUsuario'];
             echo "<h3>$nome</h3>";
           }
           else echo "<h3>Nome Sobrenome</h3>";
          ?>




    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>