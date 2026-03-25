<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/detailProduit.css">
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

        <h1>Ajouter des produits</h1>

        <div class="carte-detail">

            <form action="">

                <!-- Bloc haut : colonne gauche (Nom + Prix) | colonne droite (Description) -->
                <div class="form-ligne-haute">

                    <div class="form-colonne-gauche">
                        <div class="champ">
                            <label for="nomProduit">Nom du produit</label>
                            <input type="text" id="nomProduit" placeholder="Ex : Pain" >
                        </div>
                        <div class="champ">
                            <label for="prixProduit">Prix (€)</label>
                            <input type="number" id="prixProduit" placeholder="Ex : 2.5" >
                        </div>
                    </div>

                    <div class="champ">
                        <label class="label" for="descripProduit">Description</label>
                        <textarea class="textarea textarea-haute" id="descripProduit" name="descripProduit" placeholder="Ex : Pain bio de 500g"></textarea>
                    </div>

                </div>

                <!-- Ligne : Quantité en stock + Code-barres -->
                <div class="form-ligne">
                    <div class="champ">
                        <label class="label" for="stockProduit">Quantité en stock</label>
                        <input class="input" type="number" id="stockProduit" placeholder="Ex : 200" >
                    </div>
                    <div class="champ">
                        <label class="label" for="codeBarresProduit">Code-barres</label>
                        <div class="input-codebarre-wrapper">
                            <input class="input input-codebarre" type="text" id="codeBarresProduit">
                            <button class="bouton-imprimer" type="button" title="Imprimer le code-barres">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="6 9 6 2 18 2 18 9"/>
                                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/>
                                    <rect x="6" y="14" width="12" height="8"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Aperçu code-barres SVG statique -->
                        <div class="apercu-codebarre">
                            <svg class="codebarre-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 60">
                                <rect x="10"  y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="15"  y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="18"  y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="22"  y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="27"  y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="30"  y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="34"  y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="39"  y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="42"  y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="46"  y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="49"  y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="54"  y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="58"  y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="61"  y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="66"  y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="69"  y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="73"  y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="78"  y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="81"  y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="85"  y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="88"  y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="93"  y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="97"  y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="100" y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="105" y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="108" y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="112" y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="117" y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="120" y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="124" y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="127" y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="132" y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="136" y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="139" y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="144" y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="147" y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="151" y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="156" y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="159" y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="163" y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="166" y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="171" y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <rect x="175" y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="178" y="5" width="3"  height="40" fill="#1a1a1a"/>
                                <rect x="183" y="5" width="1"  height="40" fill="#1a1a1a"/>
                                <rect x="186" y="5" width="2"  height="40" fill="#1a1a1a"/>
                                <text x="100" y="56" text-anchor="middle" font-size="8" fill="#555" font-family="monospace">120245354544</text>
                            </svg>
                            <p class="apercu-label">Aperçu du code-barres</p>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Boutons -->
                <div class="form-boutons">
                    <button class="bouton-enregistrer" type="submit">Ajouter</button>
                </div>

            </form>
        </div>

    </main>

</body>
</html>