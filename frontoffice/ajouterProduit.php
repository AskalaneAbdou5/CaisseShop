<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/detailProduit.css">
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

        <h1>Ajouter des produits</h1>

        <div class="carte-detail">

            <form action="index.php" method="post">

                <!-- Bloc haut : colonne gauche (Nom + Prix) | colonne droite (Description) -->
                <div class="form-ligne-haute">

                    <div class="form-colonne-gauche">
                        <div class="champ">
                            <label for="nomProduit">Nom du produit</label>
                            <input type="text" id="productName" name="nouveauNomProduit" placeholder="Ex : Pain" value="100 KG de RIZ">
                        </div>
                        <div class="champ">
                            <label for="prixProduit">Prix (€)</label>
                            <input type="number" name="nouveauPrixProduit" step="any" id="priceValue" placeholder="Ex : 2.5" value="33">
                        </div>
                    </div>

                    <div class="champ">
                        <label class="label" for="descripProduit">Description</label>
                        <textarea class="textarea textarea-haute" name="nouveauDescripProduit" id="descripProduit" name="descripProduit" placeholder="Ex : Pain bio de 500g"></textarea>
                    </div>

                </div>
                <div class="form-ligne">
                    <div class="champ">
                        <label for="printerSelect" class="label">Imprimante DYMO</label>
                        <select id="printerSelect" class="select"></select>
                    </div>
                    <div class="champ">
                        <label for="copies" class="label">Nombre d’exemplaires</label>
                        <input class="input" id="copies" type="number" min="1" max="100" step="1" value="1" />
                    </div>
                </div>

                <!-- Ligne : Quantité en stock + Code-barres -->
                <div class="form-ligne">
                    <div class="champ">
                        <label class="label" for="stockProduit">Quantité en stock</label>
                        <input class="input" type="number" name="quantiteNouveauProduit" id="stockProduit" placeholder="Ex : 200" >
                    </div>
                    <div class="champ">
                        <label class="label" for="codeBarresProduit">Code-barres</label>
                        <div class="input-codebarre-wrapper">
                            <input class="input input-codebarre" name="codeBarNouveauProduit" type="text" id="barcodeValue" value="REF-1234">
                            <button class="bouton-imprimer" type="button" title="Imprimer le code-barres" id="printBtn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="6 9 6 2 18 2 18 9"/>
                                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/>
                                    <rect x="6" y="14" width="12" height="8"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Aperçu code-barres SVG statique -->
                        <div class="apercu-codebarre" id="previewZone">
                            <div class="muted">Aucun aperçu généré.</div>
                            <p class="apercu-label">Aperçu du code-barres</p>
                        </div>
                    </div>
                </div>
                <div id="statusBox" class="status">Initialisation de DYMO…</div>

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