<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link href="css/style.css" rel="stylesheet">
  </head>

<body>
<h1 id=topo>Criar Conta</h1>

<div class="cadastro">
  <form action="script.php" method="post">
    <label for="nome">Seu nome</label><br>
    <input type="text" name="nome" value="" required><br><br>

    <label for="email">E-mail</label><br>
    <input type="text" name="email" value="" required><br><br>

    <label for="senha">Senha</label><br>
    <input type="password" name="senha" value="" required><br>
    <p>* As senhas devem ter pelo menos 6 caracteres.</p><br>

    <label for="confsenha">Inserir a senha nova mais um vez</label><br>
    <input type="password" name="confsenha" value="" required><br><br>

    <label>Preferências:</label><br>
    <input type="checkbox" name="preferencias" id="musica" value="musica">
    <label for="musica">Musica</label>
    <input type="checkbox" name="preferencias" id="jogos" value="jogos">
    <label for="jogos">Jogos</label>
    <input type="checkbox" name="preferencias" id="leitura" value="leitura">
    <label for="leitura">Leitura</label>

    <br><br><br>

    <button type="submit">Criar sua senha na GenVintage</button>

  </form>

</div>

</body>
</html>
