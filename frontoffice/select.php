<?php
require_once('../asset/connexionbdd.php');

//Selection des produits

$sql = "SELECT * FROM produits WHERE 1=1";

// Filtrage des données 

$params = []; //permet de stocker les données passées en post

    //MOT CLÉ


if (isset($_POST['motcle'])){
    $motcle=$_POST['motcle'];
    
    $sql.= " AND NomProduit LIKE :motcle OR Description LIKE :motcle OR Prix LIKE :motcle OR CodeBarres LIKE :motcle";

    $params['motcle'] = "%".$motcle."%"; //on stock la valeur en post dans params
}



$stmt = $pdo->prepare($sql);
$stmt->execute($params);
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

// Filtrage des données 

$params = []; //permet de stocker les données passées en post

    //MOT CLÉ


if (isset($_POST['perso_periode_debut']) && isset($_POST['perso_periode_fin'])){

    $dateDebut=$_POST['perso_periode_debut'];
    $dateFin=$_POST['perso_periode_fin'];
    
    $sql.= " AND :dateDebut <= vt.Date AND vt.Date <= :dateFin";

    $params['dateDebut'] = $dateDebut; //on stock la valeur en post dans params
    $params['dateFin'] = $dateFin; //on stock la valeur en post dans params
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$venteProduits=$stmt->fetchall();

//Selection des ventes

$sql = "SELECT vt.Id,
vt.Date,
vt.Total,
ut.Nom,
ut.Prenom
FROM ventes vt
JOIN utilisateurs ut ON vt.IdUtilisateur = ut.Id WHERE 1=1";

// Filtrage des données 

$params = []; //permet de stocker les données passées en post

    //MOT CLÉ


if (isset($_POST['perso_periode_debut']) && isset($_POST['perso_periode_fin'])){

    $dateDebut=$_POST['perso_periode_debut'];
    $dateFin=$_POST['perso_periode_fin'];
    
    $sql.= " AND :dateDebut <= vt.Date AND vt.Date <= :dateFin";

    $params['dateDebut'] = $dateDebut; //on stock la valeur en post dans params
    $params['dateFin'] = $dateFin; //on stock la valeur en post dans params
}

$sql.=" ORDER BY vt.Id ASC";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$ventes=$stmt->fetchall();

//Selection des utilisateurs

$sql = "SELECT * FROM utilisateurs";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$utilisateurs=$stmt->fetchall();


?>