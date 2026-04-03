<?php
require_once(__DIR__ . '/insert.php');
require_once(__DIR__ . '/select.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/index.css">
    <script src="caisse.js" defer></script>
    <title>Caisse - CaisseShop</title>
</head>
<body>

    <!-- converti les données en json -->
    <script>
        const produits = <?php echo json_encode($produits); ?>;
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
                    <p class="nom-utilisateur">Jean Dullon</p>
                </div>

                <button class="bouton-deconnexion" onclick="window.location.href='login.php'">
                    Déconnexion
                </button>
            </div>
        </nav>

        <nav class="nav-menu">
            <a class="nav-lien actif" href="index.php">
                Caisse
            </a>
            <a class="nav-lien" href="produits.php">
                Produits
            </a>
            <a class="nav-lien" href="historique.php">
                Historique
            </a>
        </nav>
    </header>

    <main>

        <section class="colonne-gauche">

            <!-- Barre de recherche -->
            <div class="bloc-recherche">
                <form class="form-recherche" action="index.php" method="post">
                    <div class="input-recherche-wrapper">

                        <!-- icone de recherche -->
                        <svg class="icone-recherche" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>

                        <!-- barres de recherche -->
                        <?php if (!isset($_POST['motcle'])){ ?>

                            <input class="input-recherche" type="text" name="motcle" placeholder="Rechercher par nom, code barre ou prix....">

                        <?php }else{ ?>

                            <input class="input-recherche" type="text" name="motcle" placeholder="Rechercher par nom, code barre ou prix...." value="<?php echo  $_POST['motcle'] ?>">
                            
                        <?php }?>

                    </div>
                    <button class="bouton-filtrer" type="submit">Filtrer</button>
                </form>
            </div>

            <!-- Grille des produits -->
            <div class="grille-produits">
                
                <?php for ($i=0; $i < count($produits); $i++) { ?>

                    <article class="carte-produit" onclick="ajouterProduitPanier(<?php echo $produits[$i]['Id'] ?>)">
                        <div class="carte-produit-entete">
                            <!-- Le nom du produit -->
                            <h3 class="produit-nom"><?php echo $produits[$i]['NomProduit'] ?></h3>
                            <!-- Le nombre de stock du produit -->
                            <span class="badge-stock">Stock <?php echo $produits[$i]['Stock'] ?></span>
                        </div>
                        <!-- Le description du produit -->
                        <p class="produit-description"><?php echo $produits[$i]['Description'] ?></p>
                        <p class="produit-code">
                            <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                            <!-- Le code barres du produit -->
                            <?php echo $produits[$i]['CodeBarres'] ?>
                        </p>
                        <!-- Le prix du produit -->
                        <h2 class="produit-prix"><?php echo $produits[$i]['Prix'] ?>€</h2>
                    </article>

                <?php } ?>

            </div>
        </section>


        <section class="colonne-droite">

            <!-- PANIER -->
            <form action="ajoutVente.php" method="get">
                <div class="bloc-panier" id="produitPanier">
                    <h3 class="bloc-titre" >Panier</h3>

                </div>
                
                <br>

                <!-- TOTAL -->
                <div class="bloc-total">
                    <h3 class="bloc-titre">Total</h3>
                    <div class="total-articles">
                        <p class="total-label">Articles :</p>
                        <p class="total-valeur" id="nbArticle">0</p>
                    </div>
                    <hr class="separateur">
                    <div class="total-final">
                        <h2 class="total-titre">Total :</h2>
                        <h2 class="total-montant" id="total" >0€</h2>
                    </div>
                    <button class="bouton-valider" type="submit">Valider la vente</button>
                </div>
            </form>

            <!-- SCANNER -->
            <div class="bloc-scanner">
                <h3 class="bloc-titre">
                    <!-- Icône code-barres SVG -->
                    <svg class="icone-scanner" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/>
                        <rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/>
                        <rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/>
                    </svg>
                    Scanner code-barres
                </h3>
                <form class="form-scanner" action="">
                    <input class="input-scanner" type="text" placeholder="Scannez ou saisissez le code barres...">
                    <button class="bouton-ajouter" type="submit">Ajouter</button>
                </form>
                <p class="scanner-exemples">Exemples: 3256220123456 (Pain), 3256220123457 (Lait), 3256220123458 (Pommes)</p>
            </div>

        </section>
    </main>

</body>
</html>