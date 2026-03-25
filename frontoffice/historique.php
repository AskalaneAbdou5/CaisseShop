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
                <b class="stat-valeur">10€</b>
                <p class="stat-label">Total</p>
            </div>
            <div class="stat-card">
                <h2 class="stat-titre">Ventes réalisées</h2>
                <b class="stat-valeur">2</b>
                <p class="stat-label">Transactions</p>
            </div>
            <div class="stat-card">
                <h2 class="stat-titre">Articles vendus</h2>
                <b class="stat-valeur">10</b>
                <p class="stat-label">Articles</p>
            </div>
        </div>

        <article class="vente-card vente-card">
            <div class="vente-info">
                <h2 class="vente-numero">Vente#1</h2>
                <p class="vente-date">10/20/2026 10:23</p>
                <p class="vente-caissier">Caissier : Jean Bullon</p>
            </div>
            <div class="vente-meta">
                <p class="vente-prix">10.50€</p>
                <span class="vente-badge">5 articles</span>
                <button class="vente-btn">Voir détail</button>
            </div>
        </article>

        <article class="vente-card">
            <div class="vente-info">
                <h2 class="vente-numero">Vente#2</h2>
                <p class="vente-date">10/20/2026 10:23</p>
                <p class="vente-caissier">Caissier : Jean Kollon</p>
            </div>
            <div class="vente-meta">
                <p class="vente-prix">25.50€</p>
                <span class="vente-badge">10 articles</span>
                <button class="vente-btn">Voir détail</button>
            </div>
        </article>
    </main>

</body>
</html>