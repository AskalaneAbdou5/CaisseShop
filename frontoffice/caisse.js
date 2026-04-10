let panier = [];
let refProduit ="";



function afficherProduit(tableau) {

    const divProduits = document.getElementById('grilleProduits');
    divProduits.innerHTML = "";

    for (let index = 0; index < tableau.length; index++) {

        divProduits.innerHTML+= `
        <article class="carte-produit" onclick="ajouterProduitPanier(${tableau[index]['Id']})">
            <div class="carte-produit-entete">
                <!-- Le nom du produit -->
                <h3 class="produit-nom">${tableau[index]['NomProduit']}</h3>
                <!-- Le nombre de stock du produit -->
                <span class="badge-stock">Stock ${tableau[index]['Stock']}</span>
            </div>
            <!-- Le description du produit -->
            <p class="produit-description">${tableau[index]['Description']}</p>
            <p class="produit-code">
                <svg class="icone-code" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><rect x="1" y="4" width="2" height="16"/><rect x="5" y="4" width="1" height="16"/><rect x="8" y="4" width="2" height="16"/><rect x="12" y="4" width="1" height="16"/><rect x="15" y="4" width="3" height="16"/><rect x="20" y="4" width="1" height="16"/></svg>
                <!-- Le code barres du produit -->
                ${tableau[index]['CodeBarres']}
            </p>
            <!-- Le prix du produit -->
            <h2 class="produit-prix">${tableau[index]['Prix']}€</h2>
        </article>`

     }

}

afficherProduit(produits);

// filtrage des produits

const inputMotcle = document.getElementById('motcle');// recupere le input dont l'id est motcle

inputMotcle.addEventListener('input',() =>{

    produitsFiltre = produits.filter(p => p.NomProduit.toLowerCase().includes(inputMotcle.value));
    
    afficherProduit(produitsFiltre);
})

// affichage des produits dans le panier

function afficherProduitPanier() {

    const divpanier = document.getElementById('produitPanier');

    divpanier.innerHTML =" ";

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
            <button class="bouton-qte" onclick="augmenterQuantiteProduitPanier(${panier[index].Id})" >+</button>
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

    afficherProduitPanier();
}

//Ajout de produit dans le pannier par le code barres

document.getElementById('btnScan').addEventListener('submit',(e) => {
    e.preventDefault();

    const codeBarres = document.getElementById('scan').value;
    const  recupIdProduit = produits.find(p => p.CodeBarres == codeBarres);

    if (recupIdProduit != null) {

        ajouterProduitPanier(recupIdProduit.Id)
    }else{
        alert("Le Code Barres est fausse")
    }

});

//Ajout de produit dans le pannier par le scanneur

document.addEventListener('keydown',(e) => {

    if (e.key != 'Enter') {
        refProduit+=e.key;
    }

    if (e.key == 'Enter') {

        if (refProduit != "") {
            
            const  recupIdProduit = produits.find(p => p.CodeBarres == convertirScan(refProduit));

            if (recupIdProduit != null) {

                ajouterProduitPanier(recupIdProduit.Id);
                refProduit = "";

            }else{
                alert("Le Code Barres est fausse");
            }
        }

    }
})


function convertirScan(code){
        return code.replaceAll("Shift", "") 
        .replaceAll("à", "0")
        .replaceAll("&", "1")
        .replaceAll("é", "2")
        .replaceAll("\"", "3")
        .replaceAll("'", "4")
        .replaceAll("(", "5")
        .replaceAll("-", "6")
        .replaceAll("è", "7")
        .replaceAll("_", "8")
        .replaceAll("ç", "9");
}






