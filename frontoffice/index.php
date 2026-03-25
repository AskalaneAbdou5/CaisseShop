<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/index.css">
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
            <a class="nav-lien actif" href="index.php">
                Caisse
            </a>
            <a class="nav-lien" href="produits.php">
                Produits
            </a>
            <a class="nav-lien" href="">
                Historique
            </a>
        </nav>
    </header>

    <main>

        <section class="colonne-gauche">

            <!-- Barre de recherche -->
            <div class="bloc-recherche">
                <form class="form-recherche" action="">
                    <div class="input-recherche-wrapper">

                        <svg class="icone-recherche" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>

                        <input class="input-recherche" type="text" placeholder="Rechercher par nom, code barre ou catégorie....">
                    </div>
                    <button class="bouton-filtrer" type="submit">Filtrer</button>
                </form>
            </div>

            <!-- Grille des produits -->
            <div class="grille-produits">

                <article class="carte-produit">
                    <div class="carte-produit-entete">
                        <h3 class="produit-nom">Pain</h3>
                        <span class="badge-stock">Stock 20</span>
                    </div>
                    <p class="produit-description">Pain bio de 400g</p>
                    <p class="produit-code">
                        <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                        2015Z255222
                    </p>
                    <h2 class="produit-prix">2.50€</h2>
                </article>

                <article class="carte-produit">
                    <div class="carte-produit-entete">
                        <h3 class="produit-nom">Pain</h3>
                        <span class="badge-stock">Stock 20</span>
                    </div>
                    <p class="produit-description">Pain bio de 400g</p>
                    <p class="produit-code">
                        <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                        2015Z255222
                    </p>
                    <h2 class="produit-prix">2.50€</h2>
                </article>

                <article class="carte-produit">
                    <div class="carte-produit-entete">
                        <h3 class="produit-nom">Pain</h3>
                        <span class="badge-stock">Stock 20</span>
                    </div>
                    <p class="produit-description">Pain bio de 400g</p>
                    <p class="produit-code">
                        <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                        2015Z255222
                    </p>
                    <h2 class="produit-prix">2.50€</h2>
                </article>

                <article class="carte-produit">
                    <div class="carte-produit-entete">
                        <h3 class="produit-nom">Pain</h3>
                        <span class="badge-stock">Stock 20</span>
                    </div>
                    <p class="produit-description">Pain bio de 400g</p>
                    <p class="produit-code">
                        <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                        2015Z255222
                    </p>
                    <h2 class="produit-prix">2.50€</h2>
                </article>

                <article class="carte-produit">
                    <div class="carte-produit-entete">
                        <h3 class="produit-nom">Pain</h3>
                        <span class="badge-stock">Stock 20</span>
                    </div>
                    <p class="produit-description">Pain bio de 400g</p>
                    <p class="produit-code">
                        <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                        2015Z255222
                    </p>
                    <h2 class="produit-prix">2.50€</h2>
                </article>

                <article class="carte-produit">
                    <div class="carte-produit-entete">
                        <h3 class="produit-nom">Pain</h3>
                        <span class="badge-stock">Stock 20</span>
                    </div>
                    <p class="produit-description">Pain bio de 400g</p>
                    <p class="produit-code">
                        <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                        2015Z255222
                    </p>
                    <h2 class="produit-prix">2.50€</h2>
                </article>

                <article class="carte-produit">
                    <div class="carte-produit-entete">
                        <h3 class="produit-nom">Pain</h3>
                        <span class="badge-stock">Stock 20</span>
                    </div>
                    <p class="produit-description">Pain bio de 400g</p>
                    <p class="produit-code">
                        <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                        2015Z255222
                    </p>
                    <h2 class="produit-prix">2.50€</h2>
                </article>

                <article class="carte-produit">
                    <div class="carte-produit-entete">
                        <h3 class="produit-nom">Pain</h3>
                        <span class="badge-stock">Stock 20</span>
                    </div>
                    <p class="produit-description">Pain bio de 400g</p>
                    <p class="produit-code">
                        <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                        2015Z255222
                    </p>
                    <h2 class="produit-prix">2.50€</h2>
                </article>

                <article class="carte-produit">
                    <div class="carte-produit-entete">
                        <h3 class="produit-nom">Pain</h3>
                        <span class="badge-stock">Stock 20</span>
                    </div>
                    <p class="produit-description">Pain bio de 400g</p>
                    <p class="produit-code">
                        <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                        2015Z255222
                    </p>
                    <h2 class="produit-prix">2.50€</h2>
                </article>

            </div>
        </section>


        <section class="colonne-droite">

            <!-- PANIER -->
            <div class="bloc-panier">
                <h3 class="bloc-titre">Panier</h3>

                <div class="ligne-panier">
                    <div class="panier-info">
                        <b class="panier-nom">Pain</b>
                        <p class="panier-prix-unitaire">2.50€</p>
                    </div>
                    <div class="panier-quantite">
                        <button class="bouton-qte">−</button>
                        <p class="qte-valeur">1</p>
                        <button class="bouton-qte">+</button>
                    </div>
                    <h2 class="panier-total-ligne">2.50€</h2>
                    <button class="bouton-supprimer">
                        <!-- Icône poubelle SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="3 6 5 6 21 6"/>
                            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                            <path d="M10 11v6M14 11v6"/>
                            <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/>
                        </svg>
                    </button>
                </div>

                <div class="ligne-panier">
                    <div class="panier-info">
                        <b class="panier-nom">Pain</b>
                        <p class="panier-prix-unitaire">2.50€</p>
                    </div>
                    <div class="panier-quantite">
                        <button class="bouton-qte">−</button>
                        <p class="qte-valeur">1</p>
                        <button class="bouton-qte">+</button>
                    </div>
                    <h2 class="panier-total-ligne">2.50€</h2>
                    <button class="bouton-supprimer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="3 6 5 6 21 6"/>
                            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                            <path d="M10 11v6M14 11v6"/>
                            <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/>
                        </svg>
                    </button>
                </div>

                <div class="ligne-panier">
                    <div class="panier-info">
                        <b class="panier-nom">Pain</b>
                        <p class="panier-prix-unitaire">2.50€</p>
                    </div>
                    <div class="panier-quantite">
                        <button class="bouton-qte">−</button>
                        <p class="qte-valeur">1</p>
                        <button class="bouton-qte">+</button>
                    </div>
                    <h2 class="panier-total-ligne">2.50€</h2>
                    <button class="bouton-supprimer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="3 6 5 6 21 6"/>
                            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                            <path d="M10 11v6M14 11v6"/>
                            <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/>
                        </svg>
                    </button>
                </div>

                <div class="ligne-panier">
                    <div class="panier-info">
                        <b class="panier-nom">Pain</b>
                        <p class="panier-prix-unitaire">2.50€</p>
                    </div>
                    <div class="panier-quantite">
                        <button class="bouton-qte">−</button>
                        <p class="qte-valeur">1</p>
                        <button class="bouton-qte">+</button>
                    </div>
                    <h2 class="panier-total-ligne">2.50€</h2>
                    <button class="bouton-supprimer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="3 6 5 6 21 6"/>
                            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                            <path d="M10 11v6M14 11v6"/>
                            <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- TOTAL -->
            <div class="bloc-total">
                <h3 class="bloc-titre">Total</h3>
                <div class="total-articles">
                    <p class="total-label">Articles :</p>
                    <p class="total-valeur">1</p>
                </div>
                <hr class="separateur">
                <div class="total-final">
                    <h2 class="total-titre">Total :</h2>
                    <h2 class="total-montant">2.50€</h2>
                </div>
                <button class="bouton-valider">Valider la vente</button>
            </div>

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