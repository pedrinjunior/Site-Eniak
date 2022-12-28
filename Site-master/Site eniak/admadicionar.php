<!doctype html>
<html lang="en">
  <head>
    <?php include_once("stylesheet.php") ?>
    <title>Eniak</title>
    <style>
   
    </style>
  </head>
  <body>
  <?php include "autenticaADM.inc"; 
    
    
    ?>
    <br><br>
        <main class="flex-fill">
            <div class="container">
                <h1>Sala do Administrador</h1>
                <div class="row gx-3">
                    <div class="col-4">
                        <div class="list-group">
                            <a href="admpedidos.php" class="list-group-item list-group-item-action bg-danger text-light">
                                <i class="bi-person fs-6"></i> Pedidos
                            </a>
                            <a href="cliente_contatos.php" class="list-group-item list-group-item-action">
                                <i class="bi-mailbox fs-6"></i> Adicionar
                            </a>
                            <a  href="logout.php " onclick="if (!confirm('Tem certeza de que deseja encerrar a sessão de Administrador?')) return false;" class="list-group-item list-group-item-action">
                                <i class="bi-mailbox fs-6"></i> Sair
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-8">
                        <form action="">
                        <br><br>
                        <html>
    <body>
        <center>
                        <h1>Em breve!</h1>
</center>
    </body>
</html>	
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