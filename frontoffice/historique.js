      
const choixPeriode = document.getElementById('periode');

choixPeriode.addEventListener('click',() =>{
    if (choixPeriode.value == '1') {
        alert('test1');
    }
})
      
      
      
/*<?php for ($i=0; $i < count($ventes); $i++) { ?>
    <article class="vente-card vente-card">

        <div class="vente-header">
            <div class="vente-info">
                <h2 class="vente-numero">Vente#<?php echo ($i+1) ?></h2>
                <p class="vente-date"><?php echo $ventes[$i]['Date'] ?></p>
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
<?php } ?></input>*/