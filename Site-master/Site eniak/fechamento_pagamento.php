<!doctype html>
<html lang="en">
  <head>
    <?php include_once("stylesheet.php") ?>
    <title>Eniak - Pagamento</title>
    <style>
   
    </style>
  </head>
  <body>
    <?php include "autentica.inc";
           include_once("navbarlogado.php");
           $total = $_POST["total"];
           ?><BR><BR>

        <main class="flex-fill">
        <form action="terminou_pagamento.php" method="POST">
            <div class="container">
                <h1>Selecione a Forma de Pagamento</h1>
                <h3 class="mb-4">
                    Selecione a forma de pagamento e clique em <b>Continuar</b> para prosseguir para <b>concluir o
                        pedido</b>.
                </h3>
                <div class="d-flex justify-content-between flex-wrap border rounded-top pt-4 px-3">

                    <div class="mb-4 mx-2 flex-even">
                        <input type="radio" class="btn-check" name="pagamento" autocomplete="off" id="pag1">
                        <label class="btn p-4 h-100 w-100" for="pag1">
                            <h3>
                                <b class="text-dark">Cartão de Crédito</b>
                            </h3>
                            <hr>
                            <form class="mt-3">
                                <div class="form-floating mb-3">
                                    <input type="text" id="txtNome" class="form-control" placeholder=" " autofocus>
                                    <label for="txtNome" class="text-black-50">Nome Impresso no Cartão</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" id="txtNumero" class="form-control" placeholder=" ">
                                    <label for="txtNumero" class="text-black-50">Número do Cartão</label>
                                </div>
                                <fieldset class="row gx-3">
                                    <div class="form-floating mb-3 col-md-5 col-lg-4">                                    
                                        <input type="text" id="txtValidade" class="form-control" placeholder=" ">
                                        <label for="txtValidade" class="text-black-50">Validade (mm/aa)</label>
                                    </div>
                                    <div class="form-floating mb-3 col-md-5 col-lg-4">     
                                        <input type="text" id="txtCVV" class="form-control" placeholder=" ">
                                        <label for="txtCVV" class="text-black-50">CVV</label>
                                    </div>

                                    <div class="form-floating mb-3 col-md-5 col-lg-4">
                                        <select id="selParcelas" class="form-select">
                                            <option value="1" selected>À vista</option>
                                            <option value="2">2 x sem juros</option>
                                            <option value="3">3 x sem juros</option>
                                            <option value="4">4 x sem juros</option>
                                            <option value="5">5 x sem juros</option>
                                            <option value="6">6 x sem juros</option>
                                        </select>
                                        <label for="selParcelas" class="text-black-50">Parcelamento</label>
                                    </div>
                                </fieldset>    
                            </form>

                            <div class="container">
                                <h1>Informe seus dados</h1>
                                <hr>
                                <form action="terminou_pagamento.php" method="POST" class="mt-3">
                                    <div class="row">
                                        <div class="col-sm-10 col-md-5">
                                           
                                            
                                        </div>
                                        
                                        <div class="col-sm-10 col-md-5">
                                            <fieldset class="row gx-3">
                                                
                                            
                                                <legend>Endereço</legend>
                                                <div class="form-floating mb-3 col-md-5 col-lg-4">
                                                    <input class="form-control" type="text" name="cep" placeholder=" " />
                                                    <label for="txtCEP">CEP</label>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                                <div class="form-floating mb-3 col-md-4">
                                                    <input class="form-control" type="text" name="numero" placeholder=" " />
                                                    <label for="txtNumero">Número</label>
                                                </div>
                                                <div class="form-floating mb-3 col-md-8">
                                                    <input class="form-control" type="text" name="complemento" placeholder=" " />
                                                    <label for="txtComplemento">Complemento</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="rua" placeholder=" " />
                                                    <label for="txtRua">Nome da Rua</label>
                                                </div>
                                            </fieldset>

                                        </div>
                                    </div>
                                    <hr />
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Desejo receber informações sobre promoções.
                                        </label>
                                    </div>
                                
                            </div>
                                </div>
                                </div>
                                <div class="text-end border border-top-0 rounded-bottom p-4 pb-0">                    
                                    <a href="carrinho.php" class="btn btn-outline-danger btn-lg mb-4">
                                        Voltar aos Itens
                                    </a> 
                                    <input type="hidden" name="total" value="<?php echo $total ?>">
                                    <input type="submit" name="submit" id="submit" type="button" value="Finalizar Pedido" class="btn btn-success btn-lg ms-2 mb-4">                                    
                                </div>
                            </div>
                            </form>



                        </label>
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