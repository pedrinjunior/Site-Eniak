<link href='https://css.gg/trash.css' rel='stylesheet'>
<li class="list-group-item py-3">
                        <div class="row g-3">
                            <div class="col-4 col-md-3 col-lg-2">
                                <a href="produto.php">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode( $res2['img'] ); ?>" class="img-thumbnail">
                                </a>
                            </div>
                            <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                <h4>
                                    <b><a href="produto.php" class="text-decoration-none text-danger">
                                    <?php echo " ".$produto["nome"].""; ?></a></b>
                                </h4>
                                <h5>
                                <?php echo " ".$produto["info"].""; ?>
                                </h5>
                            </div>
                            <div
                                class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                                <div class="input-group">
                                    
                                    <input type="text" class="form-control text-center border-dark" value='<?php echo "R$".$produto["preco"].",00"; ?>' readonly>
                                    
                                    <button class="btn btn-outline-danger border-dark btn-sm" type="button">
                                    <a href="cart_remove.php?id=<?php echo $id_cart ?>" title="Remover do carrinho" style="color: #d82c45; text-decoration: none"> 
                                      <i class="gg-trash" style="font-size: 16px; line-height: 16px;"></i> </a>
                                    </button>  
                                </div>
                               
                                    
                                
                            </div>
                        </div>
                    </li>