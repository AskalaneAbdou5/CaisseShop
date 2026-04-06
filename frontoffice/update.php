<?php


if(isset($_POST['updatedDetailId']) 
&& isset($_POST['updatedDetailNom']) 
&& isset($_POST['updatedDetailPrix'])
&& isset($_POST['updatedDetailStock'])
&& isset($_POST['updatedDetailDescrip'])
&& isset($_POST['updatedDetailCodBar'])){

    $idProduit=$_POST['updatedDetailId'];
    $nomProduit=$_POST['updatedDetailNom'];
    $prix=$_POST['updatedDetailPrix'];
    $stock=$_POST['updatedDetailStock'];
    $descrip=$_POST['updatedDetailDescrip'];
    $codBar=$_POST['updatedDetailCodBar'];

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
}


?>
