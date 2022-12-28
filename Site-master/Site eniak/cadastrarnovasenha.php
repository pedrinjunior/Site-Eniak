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
 
        <main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <form class="col-sm-10 col-md-8 col-lg-6">
                        <h1>Digite sua nova senha</h1>

                        <div class="form-floating mb-3">
                            <input type="password" id="txtSenha" class="form-control" placeholder=" " autofocus>
                            <label for="txtSenha">Nova Senha</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" id="txtConfSenha" class="form-control" placeholder=" ">
                            <label for="txtConfSenha">Confirme a Nova Senha</label>
                        </div>

                        <button type="button" onclick="window.location.href='/confirmcadastrosenha.html'"
                            class="btn btn-lg btn-danger">Cadastrar Nova Senha</button>
                        
                    </form>
                </div>
            </div>
          </main>

          <div style="height: 273px;" class="d-block d-md-none"></div>
          <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
          <div style="height: 129px;" class="d-none d-lg-block"></div>
      
          <?php include_once("footer.php") ?>
        </body>
      </html>