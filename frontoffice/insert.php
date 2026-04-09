<?php
require_once('../asset/connexionbdd.php');
require_once(__DIR__ . '/select.php');


if (isset($_POST['nouveauNomProduit']) 
    && isset($_POST['nouveauPrixProduit']) 
    && isset($_POST['nouveauDescripProduit'])
    && isset($_POST['quantiteNouveauProduit'])
    && isset($_POST['codeBarNouveauProduit'])) {

    $nom=trim($_POST['nouveauNomProduit']);
    $prix=trim($_POST['nouveauPrixProduit']);
    $descrip=trim($_POST['nouveauDescripProduit']);
    $quantite=trim($_POST['quantiteNouveauProduit']);
    $codebar=trim($_POST['codeBarNouveauProduit']);
    $codbarExiste= false;

    for ($i=0; $i < count($produits); $i++) { 
        if ($codebar == $produits[$i]['CodeBarres']) {
            $codbarExiste = true;
        }
    }

   
    if (!empty($nom) && !empty($prix) && !empty($descrip) && !empty($quantite) && !empty($codebar)) {

        if ($codbarExiste) {
            echo "<script> alert('Le code barres existe déjà !!');
            window.location.href = 'ajouterProduit.php';</script>";
        }

        $sql = "INSERT INTO produits(NomProduit,Description,Prix,Stock,CodeBarres) VALUES(:nom, :descrip, :prix, :quantite, :codebar)"; 
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'nom' => $nom,
            'prix' => $prix,
            'descrip' => $descrip,
            'quantite' => $quantite,
            'codebar' => $codebar,
        ]);

        echo "<script> alert('Le produit a été bien ajouter');
        window.location.href = 'produits.php';</script>";
    }else{
        echo "<script> alert('Veuillez remplir tous les champs');
        window.location.href = 'ajouterProduit.php';</script>";
    }
    
}


?>