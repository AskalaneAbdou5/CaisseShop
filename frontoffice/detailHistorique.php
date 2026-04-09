<?php
session_start();

require_once(__DIR__ . '/session.php');
require_once(__DIR__ . '/select.php');
require_once(__DIR__ . '/fonction.php');

//Redirige l'utilisateur dans la page connexion s'il n'est pas connecter

if (!isset($_SESSION['LOG_USER'])) {
    header("Location: login.php");
}

if (isset($_POST['numVente']) 
&& isset($_POST['idVente']) 
&& isset($_POST['dateVente']) 
&& isset($_POST['fullNameVente'])
&& isset($_POST['totalVente'])
&& isset($_POST['nbArticleVente'])) {
    
    $numVente=$_POST['numVente'];
    $idVente=$_POST['idVente'];
    $dateVente=$_POST['dateVente'];
    $fullNameVente=$_POST['fullNameVente'];
    $totalVente=$_POST['totalVente'];
    $nbArticleVente=$_POST['nbArticleVente'];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/historique.css">
    <script src="historique.js" defer></script>
    <title>Caisse - CaisseShop</title>
</head>
<body>


    <!-- converti les données en json -->
    <script>
        const venteProduits = <?php echo json_encode($venteProduits); ?>;
    </script>

    <header class="header">
        <nav class="nav-top">
            <img class="logo" src="../image/logo1.png" alt="logo caisseshop">

            <div class="nav-top-droite">
                <div class="utilisateur">
                    <svg class="icone-user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="8" r="4"/>
                        <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
                    </svg>
                    <p class="nom-utilisateur"><?php echo $_SESSION['LOG_USER'] ?></p>
                </div>

                <button class="bouton-deconnexion" onclick="window.location.href='logout.php'">
                    Déconnexion
                </button>
            </div>
        </nav>

        <nav class="nav-menu">
            <a class="nav-lien " href="index.php">
                Caisse
            </a>
            <a class="nav-lien" href="produits.php">
                Produits
            </a>
            <a class="nav-lien actif" href="historique.php">
                Historique
            </a>
        </nav>
    </header>

    <main class="historique-page">

        <h1 class="historique-titre">Details de la vente#<?php echo $numVente ?></h1><br>

        <a class="lien-retour" href="historique.php">← Retour à l'historique</a><br><br>


            <article class="vente-card vente-card" id="print">

                <div class="vente-header">
                    <div class="vente-info">
                        <h2 class="vente-numero">Vente#<?php echo $numVente ?></h2>
                        <p class="vente-date"><?php echo $dateVente ?></p>
                        <p class="vente-caissier">Caissier : <?php echo $fullNameVente ?></p>
                    </div>
                    <div class="vente-meta">
                        <p class="vente-prix"><?php echo $totalVente ?>€</p>
                        <span class="vente-badge"><?php echo nombreArticleDansUneVente($idVente, $venteProduits) ?> articles</span>
                    </div>
                </div>

                <br>
                <hr>
                <br>

                <h3 class="section-title">Produits vendus</h3>
                <?php for ($i=0; $i < count($venteProduits); $i++) { 
                    if($idVente == $venteProduits[$i]['IdVente']){?>
                    
                        
                        <div class="product-item">
                            <div class="product-info">
                                <h4 class="product-name"> <?php echo $venteProduits[$i]['NomProduit'] ?></h4>
                                <p class="product-qty"> <?php echo $venteProduits[$i]['Quantite']." × ".$venteProduits[$i]['Prix'] ?> €</p>
                            </div>
                            <span class="product-price"> <?php echo $venteProduits[$i]['PrixTotalProduit'] ?> €</span>
                        </div>
                        <br>
                <?php }
                }?>
                <button class="print-btn" onclick="window.print()">Imprimer</button>

            </article>

    </main>

</body>
</html>