<?php

class ClasseLogin {


   public function logar($email, $senha) {

     $dsn = 'mysql:host=localhost;dbname=mydb;charset=utf8;port:3306';
     $db_user = 'root';
     $db_pass = '';

     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     try{
      $db = new PDO($dsn, $db_user, $db_pass);
      $query = $db->prepare('SELECT * FROM clientes WHERE email =:email and senha =:senha)');
      $query->execute([':email' => $email, ':senha' =>$senha]);
      $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
      var_dump($resultado);

      return "Finalmente, tudo certo!!!!";
      }catch(PDOException $e){
      echo $e->getMessage();
      die();
      }

  }

}




?>
