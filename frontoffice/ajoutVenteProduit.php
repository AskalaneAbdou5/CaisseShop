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

    


    for ($p=0; $p < count($produitsPanier); $p++) {

        for ($i=0; $i < count($produits); $i++) { 

            if ($produitsPanier[$p]['Id'] == $produits[$i]['Id']) {
                $prixTotalProduit = $produits[$i]['Prix'] * $produitsPanier[$p]['Quantite'];
            }

        }

        $idVente = $ventes[0]['Id'];
        $idProduit = $produitsPanier[$p]['Id'];
        $quantite = $produitsPanier[$p]['Quantite'];

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

?>