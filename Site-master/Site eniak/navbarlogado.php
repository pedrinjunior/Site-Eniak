<?php include "mysql_connect.inc"; 
$id_user = $_SESSION['id'];
      $sql= "SELECT * FROM carrinho WHERE id_user=$id_user;";
      $res = mysqli_query($conexao,$sql);
      $linhas = mysqli_num_rows($res);
      mysqli_close($conexao);
?>
<div class="d-flex flex-column wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  shadow-sm mb-3"  style="position: fixed; overflow: hidden; width: 100%; top:0; z-index: 9;">
       <div class="container">
          <a class="navbar-brand" href="home.php" title="Eniak Company"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>
         <img src="imgEniak/eniakico.png" width="30" height="30">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
             data-bs-target=".navbar-collapse">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse">
             <ul class="navbar-nav flex-grow-1">
                <li class="nav-item">
                   <a class="nav-link text-white" href="home.php">Principal</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link text-white" href="contato.php">Contato</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link text-white" href="colecoes.php">Coleções</a>
                </li>
             </ul>
                <div class="align-self-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link text-white">Conectado</a>
                        </li>
                        <li class="nav-item">
                            <a  href="logout.php " onclick="if (!confirm('Tem certeza de que deseja encerrar a sessão?')) return false;" class="nav-link text-white">Sair</a>
                        </li>
                        
                        <li class="nav-item">
                            <span class="badge rounded-pill bg-danger text-light position-absolute ms-4 mt-1"
                                title="N produto(s) no carrinho"><small><?php echo $linhas ?></small></span>
                            <a href="carrinho.php" class="nav-link text-white">
                                    <i class="bi-cart" style="font-size:14px;line-height:24px;"></i>
                                    <img src="imgEniak/carrinho.png" width="25" height="25" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
          </div>
       </div>
</nav>
</div> <br><br>