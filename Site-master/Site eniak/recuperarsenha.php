<!doctype html>
<html lang="en">
  <head>
   <?php include_once("stylesheet.php") ?>
    <title>Eniak</title>
    <style>
   
    </style>
  </head>
  <body>
    <?php include_once("navbar.php")?>

        <main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <form class="col-sm-10 col-md-8 col-lg-6">
                        <h1>Recuperação de Senha</h1>

                        <div class="form-floating mb-3">
                            <input type="email" id="txtEmail" class="form-control" placeholder=" " autofocus>
                            <label for="txtEmail">E-mail</label>
                        </div>

                        <button type="button" onclick="window.location.href='confirmrecupsenha.php'"
                            class="btn btn-lg btn-danger">Recuperar Senha</button>

                        <p class="mt-3">
                            Ainda não é cadastrado? <a href="cadastro.php">Clique aqui</a> para se cadastrar.
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