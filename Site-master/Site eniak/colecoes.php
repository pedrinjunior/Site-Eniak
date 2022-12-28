



<!doctype html>
<html lang="en">
  <head>
   <?php include_once("stylesheet.php") ?>
    <title>Eniak - Coleções</title>
    <style>
   
    </style>
  </head>
  <body>
  <?php
   session_start();
   if(isset($_SESSION["id"]) AND isset($_SESSION["senha"])){        
    include_once("navbarlogado.php");
    } else{
    include_once("navbar.php");
    } 
  ?>

    <main class="mb-5 pd-5 ">
        <div class="container">
          
          <hr>
          <div class="container">
          <h1>Coleções</h1>
          <hr></hr>
         <div id="carouselMain" class="carousel slide carousel-dark" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></button>
               <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
               <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
               <div class="carousel-item active" data-bs-interval="2000">
                  <img src="../img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                  <img src="../img/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
               </div>
               <div class="carousel-item" data-bs-interval="2000">
                  <img src="../img/slides/slide02.jpg" class="d-none d-md-block w-100" alt="">
                  <img src="../img/slides/slide02small.jpg" class="d-block d-md-none  w-100" alt="">
               </div>
               <div class="carousel-item" data-bs-interval="2000">
                  <img src="../img/slides/slide03.jpg" class="d-none d-md-block w-100" alt="">
                  <img src="../img/slides/slide03small.jpg" class="d-block d-md-none  w-100" alt="">
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Próximo</span>
            </button>
            </button>
         </div>
         
         <hr class="mt-3">
      </div>
      <main class="mb-5 pd-5 ">
         <div class="container">
            <div class="row">
               <div class="col-12 col-md-5">
                  <form class="juastify-content-center justify-content-md-start mb-3 md-md-0">
                     <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Digite aqui o que procura">
                        <button class="btn btn-dark">
                        Buscar
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <hr class="mt-3">
         <h1>Camisas</h1>
         <hr></hr>
         <div class="row g-3">
            <?php 
               include "mysql_connect.inc";
               $sql= "SELECT * FROM produto;";
               $res = mysqli_query($conexao,$sql);
               $linhas = mysqli_num_rows($res);
               for($i=0; $i < $linhas; $i++){
                  $produto = mysqli_fetch_array($res);
                  $id_prod = $produto["id"];
                  $sql2 = "SELECT * FROM imagem WHERE id_prod = $id_prod";
                  $sth = $conexao->query($sql2);
                  $res2 = mysqli_fetch_array($sth);
                  
                  include("prodcard.php");
               }

               mysqli_close($conexao);
            ?>
         </div>
        
    </main>

    <div style="height: 273px;" class="d-block d-md-none"></div>
    <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
    <div style="height: 129px;" class="d-none d-lg-block"></div>
<?php include_once("footer.php")?>
  </body>
</html>