let panier = [];



function afficherProduitPanier() {

    const divpanier = document.getElementById('produitPanier');

    divpanier.innerHTML =`<h3 class="bloc-titre" >Panier</h3>`;

    let total = 0;
    let nbArticle= 0;

    for (let index = 0; index < panier.length; index++) {

        // Calcule du prix total

        total += (panier[index].Quantite *100* panier[index].Prix) / 100;

        // Calcule du nombre d'article

        nbArticle += 1 * panier[index].Quantite;
        
        divpanier.innerHTML+=
        `<div class="ligne-panier">
        <div class="panier-info">
            <b class="panier-nom">${panier[index].Nom}</b>
            <p class="panier-prix-unitaire">${panier[index].Prix}€</p>
        </div>

        <input type="hidden" name="produits[${index}][Id]" value="${panier[index].Id}">
        <input type="hidden" name="produits[${index}][Quantite]" value="${panier[index].Quantite}">

        <div class="panier-quantite">
            <button class="bouton-qte" onclick="diminuerQuantiteProduitPanier(${panier[index].Id})">−</button>
            <p class="qte-valeur">${panier[index].Quantite}</p>
            <button class="bouton-qte" onclick="augmenterQuantiteProduitPanier(${panier[index].Id})" id="augbouton" >+</button>
        </div>
        <h2 class="panier-total-ligne">${panier[index].Prix * panier[index].Quantite}€</h2>
        <button class="bouton-supprimer" onclick="supprimerProduitPanier(${panier[index].Id})">
            <!-- Icône poubelle SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="3 6 5 6 21 6"/>
                <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                <path d="M10 11v6M14 11v6"/>
                <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/>
            </svg>
        </button>
        </div>`;
    }

    // insertion du prix dans le code html

    const divTotal=document.getElementById('total');
    divTotal.innerHTML=`${total}€`;

    // insertion du nombre d'article dans le code html

    const divNbArticle =document.getElementById('nbArticle');
    divNbArticle.innerHTML=`${nbArticle}`;

}


function ajouterProduitPanier(id) {

    const recupProduit = produits.find(p => p.Id ==id);
    const produitexist = panier.find(p => p.Id ==id);

    if (produitexist == null) {
        panier.push({
            Id: recupProduit.Id,
            Nom: recupProduit.NomProduit,
            Prix: recupProduit.Prix,
            Quantite:1,
            Stock: recupProduit.Stock
        })
    }else{
        produitexist.Quantite+=1;
    }


    afficherProduitPanier();
}

// Supprimer un produit dans le panier

function supprimerProduitPanier(id){
    panier = panier.filter(p => p.Id !=id);

    afficherProduitPanier();
}

//Diminuer le nombre de quantité pour le produit en pannier

function diminuerQuantiteProduitPanier(id){
    const selectProduit = panier.find(p => p.Id ==id);

    selectProduit.Quantite-=1;

    if (selectProduit.Quantite<=0) {
        panier = panier.filter(p => p.Id !=id);
    }

    afficherProduitPanier();
}

//Augmenter le nombre de quantité pour le produit en pannier

function augmenterQuantiteProduitPanier(id){

    const selectProduit = panier.find(p => p.Id ==id);

    selectProduit.Quantite+=1;

    if (selectProduit.Quantite > selectProduit.Stock ) {
        panier = panier.filter(p => p.Id !=id);
    }

    afficherProduitPanier();
}


