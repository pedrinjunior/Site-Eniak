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
                            <a href="cliente_dados.html" class="list-group-item list-group-item-action bg-danger text-light">
                                <i class="bi-person fs-6"></i> Pedidos
                            </a>
                            <a href="admadicionar.php" class="list-group-item list-group-item-action">
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
	
	
	<h1> Listas de Pedidos</h1>
	

<?php

	$conexao=mysqli_connect("localhost","root","","eniak");
	$lista_compra = mysqli_query($conexao,"SELECT * FROM compra"); 
   
    	
	while($row_compra = mysqli_fetch_assoc($lista_compra)) 
     
    //teste...pegando informacao de duas tabela
	{
        $id_user = $row_compra["id_user"];
        $id_compra = $row_compra["id"];
        $sql = "SELECT * FROM usuario WHERE  id = $id_user";
        $res = mysqli_query($conexao, $sql);
        $usuario = mysqli_fetch_array($res);
        $nome_user = $usuario["nome"];
        
		echo "User: ".$nome_user."<br>";
	
      
        $id_entrega = $row_compra["id_entrega"];
        $sql = "SELECT * FROM endereco WHERE  id = $id_entrega";
        $res = mysqli_query($conexao, $sql);
        $endereco = mysqli_fetch_array($res);
        $cep_endereco = $endereco["cep"];

        echo "Cep: ".$cep_endereco."<br>";

        $id_entrega = $row_compra["id_entrega"];
        $sql = "SELECT * FROM endereco WHERE  id = $id_entrega";
        $res = mysqli_query($conexao, $sql);
        $endereco = mysqli_fetch_array($res);
        $rua_endereco = $endereco["rua"];

        echo "Rua: ".$rua_endereco."<br>";

        $id_entrega = $row_compra["id_entrega"];
        $sql = "SELECT * FROM endereco WHERE  id = $id_entrega";
        $res = mysqli_query($conexao, $sql);
        $endereco = mysqli_fetch_array($res);
        $num_endereco = $endereco["numero"];

        echo "Numero: ".$num_endereco."<br>";

      

        $lista_pedido = mysqli_query($conexao,"SELECT * FROM pedido WHERE id_compra = $id_compra");
        while($row_pedido = mysqli_fetch_assoc($lista_pedido))
        {
       
            $id_prod = $row_pedido["id_prod"];
          
            $sql = "SELECT * FROM produto WHERE  id = $id_prod";
            $res = mysqli_query($conexao, $sql);
            $produto = mysqli_fetch_array($res);
            $nome_produto = $produto["nome"];

            echo "Pedido: ".$nome_produto."<br><br>";


       }
    

		echo"<a href='excluir.php?id=".$row_compra['id']."'>Entregue</a><br><br>"; 
		
	}


    
?>




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