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
                <h1>Minha Conta</h1>
                <div class="row gx-3">
                    <div class="col-4">
                        <div class="list-group">
                            <a href="cliente_dados.html" class="list-group-item list-group-item-action">
                                <i class="bi-person fs-6"></i> Dados Pessoais
                            </a>
                            <a href="cliente_contatos.html" class="list-group-item list-group-item-action">
                                <i class="bi-mailbox fs-6"></i> Contatos
                            </a>
                            <a href="cliente_endereco.html" class="list-group-item list-group-item-action bg-danger text-light">
                                <i class="bi-house-door fs-6"></i> Endereço
                            </a>
                            <a href="cliente_pedidos.html" class="list-group-item list-group-item-action">
                                <i class="bi-truck fs-6"></i> Pedidos
                            </a>
                            <a href="cliente_favoritos.html" class="list-group-item list-group-item-action">
                                <i class="bi-heart fs-6"></i> Favoritos
                            </a>
                            <a href="cliente_senha.html" class="list-group-item list-group-item-action">
                                <i class="bi-lock fs-6"></i> Alterar Senha
                            </a>
                            <a href="index.html" class="list-group-item list-group-item-action">
                                <i class="bi-door-open fs-6"></i> Sair
                            </a>
                        </div>
                    </div>
                    <div class="col-8">
                        <form action="">
                            <div class="form-floating mb-3 col-md-6 col-lg-4">
                                <input class="form-control" type="text" id="txtCEP" placeholder=" " autofocus />
                                <label for="txtCEP">CEP</label>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-8">
                                <textarea class="form-control text-muted bg-light text" style="height: 58px; font-size: 14px;" 
                                    disabled>Digite o CEP para buscarmos o endereço.</textarea>
                            </div> 
                            <div class="form-floating mb-3 col-md-4">
                                <input class="form-control" type="text" id="txtNumero" placeholder=" " autofocus />
                                <label for="txtNumero">Número</label>
                            </div>
                            <div class="form-floating mb-3 col-md-8">
                                <input class="form-control" type="text" id="txtComplemento" placeholder=" " autofocus />
                                <label for="txtComplemento">Complemento</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" id="txtReferencia" placeholder=" " autofocus />
                                <label for="txtReferencia">Ponto de Referência</label>
                            </div>                           
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <div style="height: 273px;" class="d-block d-md-none"></div>
        <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
        <div style="height: 129px;" class="d-none d-lg-block"></div>
    
       <?php include_once("footer.php")?>
      </body>
    </html>