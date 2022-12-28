<!doctype html>
<html lang="en">
  <head>
    <?php include_once("stylesheet.php") ?>
    <title>Eniak</title>
    <style>
   
    </style>
  </head>
  <body>
   <?php include_once("navbar.php")?><br><br><br><br>

        <main class="flex-fill">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <img src="Produtos/00001.png" class="img-thumbnail" id="imgProduto">
                        <br class="clearfix">
                        <div class="row my-3 gx-3">
                            <div class="col-3">
                                <img src="Produtos/00001.png" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="Produtos/00001.png" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="Produtos/00001.png" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="Produtos/00001.png" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h1>Camisa Preta Eniak</h1>
                        <p>
                            Camisa Preto com simbolo da eniak branco no peito
                        </p>
                        <p>
                          
                        </p>
                        <p>
                            <button class="btn btn-lg btn-danger mb-3 mb-xl-0 me-2">
                                <i class="bi-cart"></i> Adicionar ao Carrinho
                            </button>
                            <button class="btn btn-lg btn-outline-danger">
                                <i class="bi-heart"></i> Adicionar aos Favoritos
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </main>

        <div style="height: 273px;" class="d-block d-md-none"></div>
        <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
        <div style="height: 129px;" class="d-none d-lg-block"></div>
    
       <?php include_once("footer.php")?>
    <script>
        function trocarImagem(el) {
            var imgProduto = document.getElementById("imgProduto");
            imgProduto.src = el.src;
        }
    </script>
</body>

</html>