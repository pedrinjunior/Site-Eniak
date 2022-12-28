
<!doctype html>
<html lang="en">
  <head>
    <?php include_once("stylesheet.php") ?>
    
    <title>Eniak - Cadastro</title>
</head>

<body>
    <?php include_once("navbar.php") ?><br><br><br><br>

        <main class="flex-fill">
        <form action="cadastro_feedback.php" method="POST">
            <div class="container">
                <h1>Informe seus dados</h1>
                <hr>
                <form class="mt-3">
                    <div class="row">
                        <div class="col-sm-10 col-md-5">
                            <fieldset class="row gx-3">
                                <legend>Dados Pessoais</legend>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="nome" name="nome" placeholder="" autofocus />
                                    <label for="nome">Nome</label>
                                </div>
                                <div class="form-floating mb-3 col-md-5 col-xl-4">
                                    <input class="form-control" type="cpf" name="cpf" placeholder=" "  />
                                    <label for="cpf">CPF</label>
                                </div>
                                <div class="form-floating mb-3 col-md-5 col-xl-4">
                                    <input class="form-control" type="nasc" name="nasc" placeholder=" " />
                                    <label for="nasc" class="d-inline d-sm-none d-md-inline d-lg-none">Data
                                        Nascimento</label>
                                    <label for="nasc" class="d-none d-sm-inline d-md-none d-lg-inline">Data
                                        de Nascimento</label>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Contatos</legend>
                                <div class="form-floating mb-3 col-md-8">
                                    <input class="form-control" type="email" name="email" placeholder=" " />
                                    <label for="email">E-mail</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6">
                                    <input class="form-control" placeholder=" " type="tel" name="tel" />
                                    <label for="tel">Telefone</label>
                                </div>
                            </fieldset>
                        </div>
                       
                            <fieldset class="row gx-3">
                                <legend>Senha de Acesso</legend>
                                <div class="form-floating mb-3 col-lg-5">
                                    <input class="form-control" type="senha" name="senha" placeholder=" " />
                                    <label for="senha">Senha</label>
                                </div>
                                
                                    
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <center>
                    <div class="mb-3 text-left">
                        <a class="btn btn-lg btn-light btn-outline-danger" href="index.php">Cancelar</a>
                        <input type="submit" name="submit" id="submit" type="button" value="Criar meu cadastro" class="btn btn-lg btn-danger"
                           
                    <hr />
</center>
                    <div class="form-check mb-3">
                       
                    </div>
                    

                    </div>
                </form>
            </div>
        </main>

        <div style="height: 273px;" class="d-block d-md-none"></div>
        <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
        <div style="height: 129px;" class="d-none d-lg-block"></div>
    
        <?php include_once("footer.php") ?>
      </body>
      <form>
    </html>