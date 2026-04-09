<?php
require_once(__DIR__ . '/select.php');



if (isset($_POST['produits'])) {



    $sql = "SELECT * FROM ventes WHERE IdUtilisateur=:idUser ORDER BY Id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'idUser'=> $_SESSION['LOG_ID_USER']
    ]);
    $ventes=$stmt->fetchall();

    $produitsPanier = $_POST['produits'];
    $stockInsuffisant= false;


    for ($p=0; $p < count($produitsPanier); $p++) {

        $idVente = $ventes[0]['Id'];
        $idProduit = $produitsPanier[$p]['Id'];
        $quantite = $produitsPanier[$p]['Quantite'];
        $prixTotalProduit = 0;

        for ($i=0; $i < count($produits); $i++) { 

            if ($produitsPanier[$p]['Id'] == $produits[$i]['Id']) {

                $prixTotalProduit = $produits[$i]['Prix'] * $produitsPanier[$p]['Quantite'];

                if ($produits[$i]['Stock'] >= $quantite) {

                    // Mis à jour du stock du produit

                    $majStock = $produits[$i]['Stock'] - $quantite;

                    $sql = "UPDATE produits SET Stock=:stock WHERE Id=:idProduit"; 
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([
                        'stock' => $majStock,
                        'idProduit' => $idProduit,
                    ]);

                    header("Location: index.php");


                }else{
                    $stockInsuffisant = true;
                }
            }

        }


        if (!$stockInsuffisant) {

            // Ajout de l'element dans venteProduit

            $sql = "INSERT INTO venteproduits(IdVente,IdProduit,Quantite,PrixTotalProduit) VALUES(:idVente, :idProduit, :quantite, :prixTotalProduit)"; 
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                'idVente' => $idVente,
                'idProduit' => $idProduit,
                'quantite' => $quantite,
                'prixTotalProduit' => $prixTotalProduit,
            ]);
        }

    }


}

?>