
<html>
    <head> 
    <meta charset="utf-8">
                <?php include_once("stylesheet.php") ?>
                <title>StudyHub - Feedback</title>

    <body>
      <?php include_once("navbar.php") ?>
         <section class="probootstrap-section probootstrap-section-colored">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left section-heading mb0">
                <br><br> <br><br> <br><br> 
                        <h1 class="mb0" style="color:black">
                                <?php

                                    $email = $_POST["email"];
                                    $senha = $_POST["senha"];

                                    
                                    include "mysql_connect.inc";
                                    $sql = "SELECT * FROM moderador WHERE email = '$email';";
                                    $res = mysqli_query($conexao, $sql);

                                    if(mysqli_num_rows($res) != 1){ 
                                        echo "Email inválido!";

                                    }
                                    else{
                                        $moderador = mysqli_fetch_array($res);
                                        if($senha!= $moderador["senha"]){ 
                                            echo "Senha inválida!";

                                        }
                                        else{ // usuário e senha corretos, abre a sessão
                                            session_start();
                                            $_SESSION["id"] = $moderador["id"];
                                            $_SESSION["senha"] = $moderador["senha"];
                                            // direciona à página inicial
                                            header("Location: admpedidos.php");
                                           }
                                        }
                                    mysqli_close($conexao);
                                ?>
                        </h1><br><br> 
                       
                    </div>
                </div>
            </div>
        </section>
                                     
        <?php include_once("footer.php") ?>
    </body>
</html>