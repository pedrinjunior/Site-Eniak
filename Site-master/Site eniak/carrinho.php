<!doctype html>
<html lang="en">
  <head>
    <?php include_once("stylesheet.php") ?>
    <title>Eniak - Carrinho</title>
    <style>
   
    </style>
  </head>
  <body>
   <?php
   include "autentica.inc"; 
    include_once("navbarlogado.php")?>
    <main class="flex-fill"> <br>
            <div class="container">
                <h1>Carrinho de Compras</h1>
                <ul class="list-group mb-3">
                    <?php 
                    include "mysql_connect.inc";
                    $id_user = $_SESSION["id"];
                     $sql= "SELECT * FROM carrinho WHERE id_user = $id_user";
                     $res = mysqli_query($conexao,$sql);
                     $linhas = mysqli_num_rows($res);
                     $total = 0;
                     for($i=0; $i < $linhas; $i++){
                        $carrinho = mysqli_fetch_array($res);
                        $id_prod = $carrinho["id_prod"];
                        $id_cart = $carrinho["id"];
                        $sql2 = "SELECT * FROM imagem WHERE id_prod = $id_prod";
                        $sth = $conexao->query($sql2);
                        $res2 = mysqli_fetch_array($sth);
                        $sql3 = "SELECT * FROM produto WHERE id = $id_prod";
                        $res3 =  mysqli_query($conexao, $sql3);
                        $produto = mysqli_fetch_array($res3);
                        $total = $total + $produto["preco"];
                        
                        include("cartcard.php");
                    }
      
                     mysqli_close($conexao);
                    ?>
                    
                                        
                    <li class="list-group-item py-3" style="left:-10%">
                        <div class="text-end">
                            <h4 class="text-dark mb-3">
                                Valor Total: <?php echo "R$".$total.",00"; ?>
                            </h4>
                            
                            <form action="fechamento_pagamento.php" method="POST">
                            <a href="index.php" class="btn btn-outline-success btn-lg">
                                Continuar Comprando                            
                            </a>
                                <input type="hidden" name="total" value="<?php echo $total ?>">
                            <input type="submit" name="submit" id="submit" type="button" value="Fechar Compra" class="btn btn-danger btn-lg ms-2 mt-xs-3">
                </form>
                        </div>
                    </li>
                </ul>
            </div>
        </main>

    <div style="height: 273px;" class="d-block d-md-none"></div>
    <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
    <div style="height: 129px;" class="d-none d-lg-block"></div>

   <?php include_once("footer.php")?>
  </body>
</html>