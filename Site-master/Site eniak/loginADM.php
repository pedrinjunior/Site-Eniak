<!doctype html>
<html lang="en">
  <head>
   <?php include_once("stylesheet.php") ?>

    <title>Administração</title>
</head>

<body>
    <?php include_once("navbar.php")?><br><br><br><br>
 
        <main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <form action="login_feedbackADM.php" method="POST"  class="col-sm-7 col-md-4 col-lg-3">
                        <h1>Login Administrador</h1>

                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" placeholder=" " autofocus>
                            <label for="txtEmail">E-mail</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="senha" class="form-control" placeholder=" ">
                            <label for="txtSenha">Senha</label>
                        </div>

                       

                      
                        <input type="submit" name="submit" id="submit" type="button" value="Entrar" class="btn btn-lg btn-danger">
                            
                
                
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