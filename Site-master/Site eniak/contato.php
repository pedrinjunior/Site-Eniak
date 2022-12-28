<!doctype html>
<html lang="en">
  <head>
   <?php include_once("stylesheet.php") ?>
    <title>Eniak - Contato</title>
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
  ?><br><br><br><br>
 
        <main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <form class="col-sm-10 col-md-8 col-lg-6">
                        <h1>Entre em Contato</h1>

                        <div class="form-floating mb-3">
                            <input type="text" id="txtNomeCompleto" class="form-control" placeholder=" " autofocus>
                            <label for="txtNomeCompleto">Nome Completo</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="email" id="txtEmail" class="form-control" placeholder=" ">
                            <label for="txtEmail">E-mail</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea id="txtMensagem" class="form-control" placeholder=" " style="height: 200px;"></textarea>
                            <label for="txtMensagem">Mensagem</label>
                        </div>

                        <button type="button" onclick="window.location.href='confirmcontato.php'" class="btn btn-lg btn-danger">Enviar Mensagem</button>

                        <p class="mt-3">
                            Faremos nosso melhor para responder sua mensagem em até 2 dias úteis.
                        </p>

                        <p class="mt-3">
                            Atenciosamente,<br>
                            Central de Relacionamento da Eniak Company
                        </p>
                    </form>
                </div>
            </div>
        </main>

        <div style="height: 273px;" class="d-block d-md-none"></div>
        <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
        <div style="height: 129px;" class="d-none d-lg-block"></div>
    
       <?php include_once("footer.php")?>
      </body>
    </html>