<?php
    session_start();
    if(isset($_SESSION["id"])){

        $user = $_SESSION["id"];
    }
    if(isset($_SESSION["senha"])){
        $password = $_SESSION["senha"];
    }
      if(empty($user) OR empty($password)){
        header("Location: deslogadoADM.php");
        exit;
    }
    else{
        include "mysql_connect.inc";
        $sql = "SELECT * FROM moderador WHERE id = '$user';";
        $res = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($res) != 1){ // testa se não encontrou o id
            unset($_SESSION["id"]);
            unset($_SESSION["senha"]);
            header("Location: deslogadoADM.php");
            exit;
        }
        else{
            $moderador = mysqli_fetch_array($res);
            if($password != $moderador["senha"]){ // testa se a senha está errada
                unset($_SESSION["id"]);
                unset($_SESSION["senha"]);
                header("Location: deslogadoADM.php");
                exit;
            }
        }
        mysqli_close($conexao);
    }
?>