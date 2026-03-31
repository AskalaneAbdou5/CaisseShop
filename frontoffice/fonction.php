<?php

function nombreArticleDansUneVente($idVente,$venteProduits){
    $nbArticle=0;
    for ($i=0; $i < count($venteProduits); $i++) { 
        if ($idVente == $venteProduits[$i]['IdVente']) {
            $nbArticle+=1;
        }
    }
    return $nbArticle;
}

?>