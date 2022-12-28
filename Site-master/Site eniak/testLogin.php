<?php

$email = $_POST['email'];
$senha = MD5($_POST['senha']);
//$entrar = $_POST['entrar'];
$conexao=mysqli_connect("localhost","root","","formulario-eniak");

if(isset($entrar)){
    $verifica = $connect -> query("SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'")
    or die ("erro ao selecionar coluna");

    $rows = $verifica -> num_rows;
    if($rows <=0){
        echo"<script language='javascript' type='text/javascript'>
    }
    alert('login e / ou senha incorretos');windows.location.href='login.html';</script>";
    die();
    
    }else{
        setcookie("login",$login);
        header("location:index.php");
    }

}


?>