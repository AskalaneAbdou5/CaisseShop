<?php
require_once(__DIR__ . '/select.php');



if (isset($_POST['produits'])) {

    $produitsPanier = $_POST['produits'];
    $idUtilisateur = $_SESSION['LOG_ID_USER'];
    $total = 0; 
    $stockInsuffisant = false;


    for ($p=0; $p < count($produitsPanier); $p++) {

        for ($i=0; $i < count($produits); $i++) { 

            if ($produitsPanier[$p]['Id'] == $produits[$i]['Id']) {
                $total += $produits[$i]['Prix'] * $produitsPanier[$p]['Quantite'];

                if ($produits[$i]['Stock'] < $produitsPanier[$p]['Quantite']) {
                    $stockInsuffisant = true;
                }
            }

        }
    }

    if (!$stockInsuffisant) {

        $sql = "INSERT INTO ventes(IdUtilisateur,Total) VALUES(:IdUser, :total)"; 
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'IdUser' => $idUtilisateur,
            'total' => $total
        ]);
    }else{
        echo "<script> alert('La quantité depasse le stock');</script>";
    }
}

?>