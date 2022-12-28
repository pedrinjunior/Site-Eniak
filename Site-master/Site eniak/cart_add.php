<?php
include("autentica.inc");
$id_prod = $_POST["id_prod"];
$id_user = $_SESSION["id"];

include "mysql_connect.inc";
$sql = "INSERT INTO `carrinho` (`id_user`, `id_prod`) VALUES ($id_user, $id_prod)";
mysqli_query($conexao,$sql);
mysqli_close($conexao);

header("Location: carrinho.php");
?>
