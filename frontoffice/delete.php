<?php

if (isset($_POST['deleteProduit'])){

    $idProduit=$_POST['deleteProduit'];

    $sql = "DELETE FROM produits WHERE Id=:idProduit";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'idProduit'=>$idProduit
    ]);

}

?>