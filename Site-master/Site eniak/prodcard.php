            
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 align-items-stretch">
                  <div class="card text-center bg-light">
                     <img src="data:image/jpeg;base64,<?php echo base64_encode( $res2['img'] ); ?>" class="card-img-top col-xl-4">
                     <div class="card-header">
                     <?php echo " ".$produto["nome"].""; ?><br>
                        <small> <?php echo "R$".$produto["preco"].",00"; ?></small>
                     </div> <small class="text-success">Em estoque!</small>
                     <div class="card-footer">
                     
                        <form class="d-block" method="post" action="cart_add.php">
                            <input type="hidden" name="id_prod" value="<?php echo $id_prod ?>">
                           <input type="submit" class="btn btn-dark" value="+ Carrinho">
                           
                           </button><br>
                        </form>
                       
                     </div>
                  </div>
               </div>