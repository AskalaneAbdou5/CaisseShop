<?php
require_once(__DIR__ . '/select.php');
require_once(__DIR__ . '/fonction.php');


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/historique.css">
    <title>Caisse - CaisseShop</title>
</head>
<body>

    <header class="header">
        <nav class="nav-top">
            <img class="logo" src="../image/logo1.png" alt="logo caisseshop">

            <div class="nav-top-droite">
                <div class="utilisateur">
                    <svg class="icone-user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="8" r="4"/>
                        <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
                    </svg>
                    <p class="nom-utilisateur">Jean Dullon</p>
                </div>

                <button class="bouton-deconnexion">
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
        <h1 class="historique-titre">Historique des ventes</h1>
        <p class="historique-description">Consultez l'historique de vos ventes et statistiques</p>

        <div class="filtres-row">
            <form class="filtre-periode" action="">
                <label class="filtre-label" for="periode">Periode :</label>
                <select class="filtre-select" name="periode" id="periode">
                    <option value="1">Aujourd'hui</option>
                    <option value="2">Semaine</option>
                </select>
            </form>

            <form class="filtre-perso" action="">
                <label class="filtre-label" for="perso_periode_debut">Periode personalisé :</label>
                <input class="filtre-date" type="date" name="perso_periode_debut" id="perso_periode_debut">
                <span class="filtre-au">au</span>
                <input class="filtre-date" type="date" name="perso_periode_fin" id="perso_periode_fin">
                <button class="filtre-btn" type="submit">Filtrer</button>
            </form>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <h2 class="stat-titre">Chiffre d'affaires</h2>
                <b class="stat-valeur"><?php echo CalculDuChiffreAffaires($ventes) ?>€</b>
                <p class="stat-label">Total</p>
            </div>
            <div class="stat-card">
                <h2 class="stat-titre">Ventes réalisées</h2>
                <b class="stat-valeur"><?php echo count($ventes) ?></b>
                <p class="stat-label">Transactions</p>
            </div>
            <div class="stat-card">
                <h2 class="stat-titre">Articles vendus</h2>
                <b class="stat-valeur"><?php echo count($venteProduits) ?></b>
                <p class="stat-label">Articles</p>
            </div>
        </div>

        <?php for ($i=0; $i < count($ventes); $i++) { ?>
            <article class="vente-card vente-card">

                <div class="vente-header">
                    <div class="vente-info">
                        <h2 class="vente-numero">Vente#<?php echo ($i+1) ?></h2>
                        <p class="vente-date"><?php echo $ventes[$i]['Date'] ?></p>
                        <p class="vente-caissier">Caissier : <?php echo $ventes[$i]['Nom']." ".$ventes[$i]['Prenom'] ?></p>
                    </div>
                    <div class="vente-meta">
                        <p class="vente-prix"><?php echo $ventes[$i]['Total'] ?>€</p>
                        <span class="vente-badge"><?php echo nombreArticleDansUneVente($ventes[$i]['Id'], $venteProduits) ?> articles</span>
                        <button class="vente-btn">Voir détail</button>
                    </div>
                </div>

            </article>
        <?php } ?>

    </main>

</body>
</html>