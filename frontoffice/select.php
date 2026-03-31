<?php
require_once('../asset/connexionbdd.php');

//Selection des produits

$sql = "SELECT * FROM `produits`";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$produits=$stmt->fetchall();

//Selection des venteProduits

$sql = "SELECT vtp.IdVente,
vt.Date,
vt.Total,
ut.Nom,
ut.Prenom
FROM venteproduits vtp
JOIN produits pdt ON vtp.IdProduit = pdt.Id
JOIN ventes vt ON vtp.IdVente = vt.Id
JOIN utilisateurs ut ON vt.IdUtilisateur = ut.Id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$venteProduits=$stmt->fetchall();

?>