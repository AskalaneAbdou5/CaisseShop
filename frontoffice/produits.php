<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/produits.css">
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

        <div class="entete-produits">
            <div class="entete-produits-texte">
                <h1>Gestion des produits</h1>
                <p>Consultez et gérez vos produits en stock</p>
            </div>
            <button class="bouton-nouveau-produit" onclick="window.location.href='ajouterProduit.php'">+ Nouveau Produit</button>
        </div>
 
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
        <div class="grille-produits-4">
 
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
                <div class="action">
                    <button class="bouton-detail" onclick="window.location.href='modifierProduit.php'">
                        <svg class="icone-oeil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        Détail
                    </button>
                    <button class="bouton-delete">Supprimer</button>
                </div>
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
                <div class="action">
                    <button class="bouton-detail" onclick="window.location.href='modifierProduit.php'">
                        <svg class="icone-oeil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        Détail
                    </button>
                    <button class="bouton-delete">Supprimer</button>
                </div>
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
                <div class="action">
                    <button class="bouton-detail" onclick="window.location.href='modifierProduit.php'">
                        <svg class="icone-oeil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        Détail
                    </button>
                    <button class="bouton-delete">Supprimer</button>
                </div>
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
                <div class="action">
                    <button class="bouton-detail" onclick="window.location.href='modifierProduit.php'">
                        <svg class="icone-oeil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        Détail
                    </button>
                    <button class="bouton-delete">Supprimer</button>
                </div>
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
                <div class="action">
                    <button class="bouton-detail" onclick="window.location.href='modifierProduit.php'">
                        <svg class="icone-oeil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        Détail
                    </button>
                    <button class="bouton-delete">Supprimer</button>
                </div>
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
                <div class="action">
                    <button class="bouton-detail" onclick="window.location.href='modifierProduit.php'">
                        <svg class="icone-oeil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        Détail
                    </button>
                    <button class="bouton-delete">Supprimer</button>
                </div>
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
                <div class="action">
                    <button class="bouton-detail" onclick="window.location.href='modifierProduit.php'">
                        <svg class="icone-oeil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        Détail
                    </button>
                    <button class="bouton-delete">Supprimer</button>
                </div>
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
                <div class="action">
                    <button class="bouton-detail" onclick="window.location.href='modifierProduit.php'">
                        <svg class="icone-oeil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        Détail
                    </button>
                    <button class="bouton-delete">Supprimer</button>
                </div>
            </article>
 
        </div>
    </main>

</body>
</html>