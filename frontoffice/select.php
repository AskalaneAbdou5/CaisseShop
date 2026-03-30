<?php
require_once('../asset/connexionbdd.php');

//Selection des produits

$sql = "SELECT * FROM `produits`";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$produits=$stmt->fetchall();


?>