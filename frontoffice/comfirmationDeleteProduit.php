<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/produits.css">
    <script src="https://cdn.jsdelivr.net/gh/dymosoftware/dymo-connect-framework/dymo.connect.framework.js"></script>
    <script src="generateurCodeBarres.js" defer></script>
    
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
            <a class="nav-lien actif" href="produits.php">
                Produits
            </a>
            <a class="nav-lien" href="historique.php">
                Historique
            </a>
        </nav>
    </header>

  <main>

        <h1>Confirmer la suppression</h1>

        <div class="carte-detail">
            <article class="carte-produit">
                <div class="carte-produit-entete">
                    <!-- Le nom du produit -->
                    <h3 class="produit-nom">Pain</h3>
                    <!-- Le nombre de stock du produit -->
                    <span class="badge-stock">Stock 50</span>
                </div>
                <!-- Le description du produit -->
                <p class="produit-description">pain bio fait par alane</p>
                <p class="produit-code">
                    <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                    <!-- Le code barres du produit -->
                    555555
                </p>
                <!-- Le prix du produit -->
                <h2 class="produit-prix">20€</h2>
                <div class="action">
                    <form action="comfirmationDeleteProduit.php">
                        <button class="bouton-delete">Supprimer</button>
                    </form>
                    <button class="bouton-annuler" onclick="window.location.href='produits.php'">Annuler</button>
                </div>
            </article>
        </div>

    </main>
    

</body>
</html>