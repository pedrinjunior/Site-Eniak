<!doctype html>
<html lang="en">
  <head>
    <?php include_once("stylesheet.php") ?>
    <title>Eniak</title>
    <style>
   
    </style>
  </head>
  <body>
    <?php include "autentica.inc"; 
    include_once("navbarlogado.php") ?>
    <?php
include_once('config.php');

$id_user = $_SESSION['id'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$rua = $_POST["rua"];
$preco_venda = $_POST["total"];





include "mysql_connect.inc";
$sql = "INSERT INTO `endereco` (`id_user`, `cep`, `numero`,`complemento`,`rua`) VALUES ($id_user, '$cep', $numero, $complemento, '$rua')";
mysqli_query($conexao,$sql);
$id_entrega = mysqli_insert_id($conexao);

$datahora = date("Y-m-d H:i:s");

$sql = "INSERT INTO `compra` (`id_user`, `data`, `id_entrega`,`preco_venda`) VALUES ($id_user, '$datahora', $id_entrega, $preco_venda)";
mysqli_query($conexao,$sql);
$id_compra = mysqli_insert_id($conexao);

$sql= "SELECT * FROM carrinho WHERE id_user = $id_user";
$res = mysqli_query($conexao,$sql);
$linhas = mysqli_num_rows($res);
for($i=0; $i < $linhas; $i++)
{
  $carrinho = mysqli_fetch_array($res);
  $id_prod = $carrinho["id_prod"];
  $sql2 = "INSERT INTO `pedido` (`id_user`, `id_prod`, `id_compra`) VALUES ($id_user, $id_prod, $id_compra)";
  mysqli_query($conexao,$sql2);
}

mysqli_query($conexao, "DELETE FROM `carrinho` WHERE `id_user` = $id_user");


mysqli_close($conexao);

?>

    <main class="mb-5 pd-5 ">
        <div class="container">
          <h1></h1>
          <hr>
          <br><br>
          Pagamento Efetuado com sucesso
          
           <h1>A Eniak agradece sua compra</h1>
           
           <br><br>
           <a class="btn btn-lg btn-danger" href="index.php">Voltar para o inicio</a>

        </div>

    </main>

    <div style="height: 273px;" class="d-block d-md-none"></div>
    <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
    <div style="height: 129px;" class="d-none d-lg-block"></div>

    <?php include_once("footer.php") ?>
  </body>
</html>