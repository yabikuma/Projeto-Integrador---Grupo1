@extends('layout.app')

@section('content')

    <div class="container">
    <div class="text-center loginw">
      <form class="form-signin" action="/login" method="post">
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

  </div>


@stop