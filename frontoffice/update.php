<?php
require_once(__DIR__ . '/select.php');

if(isset($_POST['updatedDetailId']) 
&& isset($_POST['updatedDetailNom']) 
&& isset($_POST['updatedDetailPrix'])
&& isset($_POST['updatedDetailStock'])
&& isset($_POST['updatedDetailDescrip'])
&& isset($_POST['updatedDetailCodBar'])){

    $idProduit=$_POST['updatedDetailId'];
    $nomProduit=trim($_POST['updatedDetailNom']);
    $prix=trim($_POST['updatedDetailPrix']);
    $stock=trim($_POST['updatedDetailStock']);
    $descrip=trim($_POST['updatedDetailDescrip']);
    $codBar=trim($_POST['updatedDetailCodBar']);
    $codbarExist = false;

    for ($i=0; $i < count($produits); $i++) { 
        if ($codBar == $produits[$i]['CodeBarres'] AND $idProduit != $produits[$i]['Id']) {
            $codbarExist = true;
        }
    }

  
    if (!empty($nomProduit) && !empty($prix) && !empty($descrip) && !empty($stock) && !empty($codBar)) {

        if ($codbarExist) {
            echo "<script> alert('Le code barres existe déjà !!');
            window.location.href = 'produits.php';</script>";
            exit();
        }


        $sql = "UPDATE produits SET NomProduit=:nomProduit, Description=:descrip, Prix=:prix, Stock=:stock, CodeBarres=:codBar WHERE Id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id'=>$idProduit,
            'nomProduit'=>$nomProduit,
            'descrip'=>$descrip,
            'prix'=>$prix,
            'stock'=>$stock,
            'codBar'=>$codBar
        ]);

        header("Location: produits.php");

    }else{
        echo "<script> alert('Veuillez remplir tous les champs');</script>";
    }
}


?>
