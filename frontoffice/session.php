<?php
require_once(__DIR__ . '/select.php');


if (isset($_POST['emailLogin']) && isset($_POST['mdpLogin'])){
    for ($i=0; $i < count($utilisateurs); $i++) { 
        if ($utilisateurs[$i]['Email'] == $_POST['emailLogin'] && password_verify($_POST['mdpLogin'], $utilisateurs[$i]['MotDePasse'])){

            $_SESSION['LOG_USER']= $utilisateurs[$i]['Nom']." ".$utilisateurs[$i]['Prenom'];
            $_SESSION['LOG_ID_USER']= $utilisateurs[$i]['Id'];

            header("Location: index.php");

        }
    }
    echo "<script>
        alert('L\'identifiant ou le mot de passe est incorrect');
        window.location.href = 'login.php';
    </script>";
}

?>