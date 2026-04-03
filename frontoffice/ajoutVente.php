<?php

if (isset($_GET['produits'])) {
    echo $_GET['produits'][0]['Id'];
    echo "</br>";
    echo $_GET['produits'][0]['Quantite'];
    echo "</br>";
}