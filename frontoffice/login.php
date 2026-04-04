<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <title>Connexion</title>
</head>
<body>

    <div class="page">
        <div class="carte">
            <img class="logo" src="../image/logo1.png" alt="logo caisseshop">

            <h1>Connexion</h1>

            <form action="index.php" method="post">

                <div class="champ">
                    <label for="email">Email :</label>
                    <input type="email" name="emailLogin">
                </div>

                <div class="champ">
                    <label for="mdp">Mot de passe :</label>
                    <input type="password" name="mdpLogin">
                </div>
                
                <button type="submit">connexion</button>

                
            </form>
        </div>
    </div>
</body>
</html>