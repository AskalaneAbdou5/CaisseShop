<?php
require_once('../asset/connexionbdd.php');

//Selection des produits

$sql = "SELECT * FROM `produits`";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$produits=$stmt->fetchall();

//Selection des venteProduits

$sql = "SELECT vtp.IdVente,
vtp.IdProduit,
pdt.NomProduit,
vtp.Quantite,
pdt.Prix,
vtp.PrixTotalProduit
FROM venteproduits vtp
JOIN produits pdt ON vtp.IdProduit = pdt.Id
JOIN ventes vt ON vtp.IdVente = vt.Id
JOIN utilisateurs ut ON vt.IdUtilisateur = ut.Id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$venteProduits=$stmt->fetchall();

$sql = "SELECT vt.Id,
vt.Date,
vt.Total,
ut.Nom,
ut.Prenom
FROM ventes vt
JOIN utilisateurs ut ON vt.IdUtilisateur = ut.Id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$ventes=$stmt->fetchall();


?>