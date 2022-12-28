<?php
include ("autentica.inc");
$id = $_GET["id"];

include "mysql_connect.inc";
$sql = "DELETE FROM carrinho WHERE `carrinho`.`id`= $id;";
mysqli_query($conexao,$sql);
mysqli_close($conexao);

header("Location: carrinho.php");
?>