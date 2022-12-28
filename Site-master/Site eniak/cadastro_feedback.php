
<!doctype html>
<html lang="en">
  <head>
    <?php include_once("stylesheet.php") ?>
    <title>Eniak</title>
    <style>
   
    </style>
  </head>
  <body>
    <?php include_once("navbar.php") ?>
    <?php
include_once('config.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$nasc = $_POST['nasc'];
$cpf = $_POST['cpf'];
$erro = 0;
  if(strlen($nome)<5 ){
    echo"O nome deve possuir no minimo 5 caracteres;<br>";
    $erro = $erro + 1;
  }






include "mysql_connect.inc";
mysqli_query($conexao, "INSERT INTO usuario(nome,senha,email,tel,nasc,cpf) 
VALUES ('$nome','$senha','$email','$tel','$nasc','$cpf')");



?>
    <main class="mb-5 pd-5 ">
        <div class="container">
       <br><br>
          <hr>
          <center>
            <h1>Cadastro Efetuado com Sucesso</h1>
            Muito obrigado por fazer parte
        </div>
</center>
        <br><br>
       <center> 
                    <div class="mb-3 text-left">
                        <a class="btn btn-lg btn-light btn-outline-danger" href="index.php">Voltar</a>
                        <a class="btn btn-lg btn-danger" href="login.php">Logar</a>
                        
                           
                    <hr />

                    <div class="form-check mb-3">
</center>
    </main>

    <div style="height: 273px;" class="d-block d-md-none"></div>
    <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
    <div style="height: 129px;" class="d-none d-lg-block"></div>

    <?php include_once("footer.php") ?>
  
  </body>
</html>