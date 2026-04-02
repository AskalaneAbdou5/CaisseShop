                <!-- Détails des produits vendus -->

                <?php for ($i=0; $i < count($venteProduits); $i++) { 
                    if($ventes[$i]['Id'] == $venteProduits[$i]['IdVente']){?>
                    
                        <h3 class="section-title">Produits vendus</h3>
                        <div class="product-item">
                            <div class="product-info">
                                <h4 class="product-name"><?php echo $venteProduits[$i]['NomProduit'] ?></h4>
                                <p class="product-qty"><?php echo $venteProduits[$i]['Quantite']." × ".$venteProduits[$i]['Prix'] ?></p>
                            </div>
                            <span class="product-price"><?php echo $venteProduits[$i]['PrixTotalProduit'] ?></span>
                        </div>
                <?php  }
                }?>