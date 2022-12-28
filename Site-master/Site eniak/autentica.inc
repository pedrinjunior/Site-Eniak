<?php
    session_start();
    if(isset($_SESSION["id"])){

        $user = $_SESSION["id"];
    }
    if(isset($_SESSION["senha"])){
        $password = $_SESSION["senha"];
    }
      if(empty($user) OR empty($password)){
        header("Location: deslogado.php");
        exit;
    }
    else{
        include "mysql_connect.inc";
        $sql = "SELECT * FROM usuario WHERE id = '$user';";
        $res = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($res) != 1){ // testa se não encontrou o id
            unset($_SESSION["id"]);
            unset($_SESSION["senha"]);
            header("Location: deslogado.php");
            exit;
        }
        else{
            $usuario = mysqli_fetch_array($res);
            if($password != $usuario["senha"]){ // testa se a senha está errada
                unset($_SESSION["id"]);
                unset($_SESSION["senha"]);
                header("Location: deslogado.php");
                exit;
            }
        }
        mysqli_close($conexao);
    }
?>