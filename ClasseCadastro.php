<?php

class ClasseCadastro {

    private $nome;
    private $sobrenome;
    private $sexo;
    private $email;
    private $senha;
    private $cpf;
    private $cnpj;
    private $telefone;
    private $celular;
    private $tipoDePessoa;


    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
      }

    public function getSexo() {
          return $this->sexo;
      }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getCpf(){
      return $this->cpf;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

  public function getTelefone(){
      return $this->telefone;
    }

  public function getCelular(){
      return $this->celular;
    }


public function _construct($tipoDePessoa, $valores){
      $this->nome = $valores["nome"];
      $this->email = $valores["email"];
      $this->senha = $valores["senha"];
      $this->telefone = $valores['telefone'];
      $this->celular = $valores["celular"];
      $this->tipoDePessoa = $valores["tipoDePessoa"];

    if ($tipoDePessoa == "pf" ){
      $this->sobrenome = $valores["sobrenome"];
      $this->cpf = $valores["cpf"];
      $this->sexo= $valores["sexo"];
    } else {
        $this->cnpj = $valores["cnpj"];
    }

  }

  public function cadastrarUsuarioPessoaFisica(){
    $dsn = 'mysql:host=localhost;dbname=mydb;charset=utf8;port:3306';
          $db_user = 'root';
          $db_pass = '';
          try{
          $db = new PDO($dsn, $db_user, $db_pass);
          $query = $db->prepare('INSERT INTO clientes("nome", "sobrenome", "sexo", "email", "senha", "cpf",  "telefone", "celular") values (:nome, :sobrenome, :sexo, :email, :senha, :cpf,  :telefone, :celular)');
          $query->execute([':nome' => $this->nome,
                          ':sobrenome' => $this->sobrenome,
                          ':sexo' => $this->sexo,
                          ':email' => $$this->email,
                          ':senha' => $this->senha,
                          ':cpf' => $this->cpf,
                          ':telefone' => $this->telefone,
                          ':celular' => $this->celular]);

          return $db->lastInsetId();

          }catch(PDOException $e){
            echo $e->getMessage();
            die();
          }
  }


  public function cadastrarUsuarioPessoaJuridica(){
    $dsn = 'mysql:host=localhost;dbname=mydb;charset=utf8;port:3306';
          $db_user = 'root';
          $db_pass = '';
          try{
          $db = new PDO($dsn, $db_user, $db_pass);
          $query = $db->prepare('INSERT INTO clientes("nome", "email", "senha", "cnpj", "telefone", "celular")
          values (:nome, :email, :senha, :cnpj, :telefone, :celular)');
          $query->execute([':nome' => $this->nome, ':email' => $this->email, ':senha' => $this->senha, ':cnpj' => $this->cnpj, 'telefone' => $this->telefone, 'celular' => $this->celular]);

          return $db->lastInsetId();

          }catch(PDOException $e){
            echo $e->getMessage();
          die();

        }
      }

  public function cadastrarUsuario(){
        if ($this->tipoDePessoa == "pf"){
          $this->cadastrarUsuarioPessoaFisica();
        } else {
          $this->cadastrarUsuarioPessoaJuridica();
        }
    }
}







?>
