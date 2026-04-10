<?php
session_start();

require_once(__DIR__ . '/session.php');
require_once(__DIR__ . '/select.php');
require_once(__DIR__ . '/fonction.php');

//Redirige l'utilisateur dans la page connexion s'il n'est pas connecter

if (!isset($_SESSION['LOG_USER'])) {
    header("Location: login.php");
}

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

    <!-- converti les données en json -->
    <script>
        const ventes = <?php echo json_encode($ventes); ?>;
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
        <h1 class="historique-titre">Historique des ventes</h1>
        <p class="historique-description">Consultez l'historique de vos ventes et statistiques</p>

        <div class="filtres-row">
            <!-- Filtrage par periode -->
            <form class="filtre-periode" action="historique.php" method="post">
                <label class="filtre-label" for="periode">Periode :</label>
                <select class="filtre-select" name="periode">

                    <?php if (isset($_POST['periode'])){ 
                        if($_POST['periode'] == '1'){?>

                            <option value="1" selected>Aujourd'hui</option>
                            <option value="2">Semaine</option>

                        <?php }else{ ?>

                            <option value="1">Aujourd'hui</option>
                            <option value="2" selected>Semaine</option>

                    <?php }
                    }else{?>

                            <option value="1">Aujourd'hui</option>
                            <option value="2">Semaine</option>

                    <?php } ?>

                </select>
                <button class="filtre-btn" type="submit">Filtrer</button>
            </form>

           <!-- Filtrage par periode personnalisé --> 
            <form class="filtre-perso" action="historique.php" method="post">
                <label class="filtre-label" for="perso_periode_debut">Periode personalisé :</label>

                <?php if (!isset($_POST['perso_periode_debut']) && !isset($_POST['perso_periode_fin'])) { ?>

                    <input class="filtre-date" type="date" name="perso_periode_debut" >
                    <span class="filtre-au">au</span>
                    <input class="filtre-date" type="date" name="perso_periode_fin" >

                <?php }else{ ?>

                    <input class="filtre-date" type="date" name="perso_periode_debut"  value="<?php echo $_POST['perso_periode_debut'] ?>">
                    <span class="filtre-au">au</span>
                    <input class="filtre-date" type="date" name="perso_periode_fin" value="<?php echo $_POST['perso_periode_fin'] ?>">

                <?php } ?>

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
                        <p class="vente-date"><?php echo date('d/m/Y - H :i',strtotime($ventes[$i]['Date'])) ?></p>
                        <p class="vente-caissier">Caissier : <?php echo $ventes[$i]['Nom']." ".$ventes[$i]['Prenom'] ?></p>
                    </div>
                    <div class="vente-meta">
                        <p class="vente-prix"><?php echo $ventes[$i]['Total'] ?>€</p>
                        <span class="vente-badge"><?php echo nombreArticleDansUneVente($ventes[$i]['Id'], $venteProduits) ?> articles</span>

                        <form action="detailHistorique.php" method="post">
                            <input type="hidden" name="numVente" value="<?php echo ($i+1) ?>">
                            <input type="hidden" name="idVente" value="<?php echo $ventes[$i]['Id'] ?>">
                            <input type="hidden" name="dateVente" value="<?php echo $ventes[$i]['Date'] ?>">
                            <input type="hidden" name="fullNameVente" value="<?php echo $ventes[$i]['Nom']." ".$ventes[$i]['Prenom'] ?>">
                            <input type="hidden" name="totalVente" value="<?php echo $ventes[$i]['Total'] ?>">
                            <input type="hidden" name="nbArticleVente" value="<?php echo nombreArticleDansUneVente($ventes[$i]['Id'], $venteProduits) ?>">
                            <button class="vente-btn" type="submit">Voir détail</button>
                        </form>
                        
                    </div>
                </div>

            </article>
        <?php } ?>

    </main>

</body>
</html>