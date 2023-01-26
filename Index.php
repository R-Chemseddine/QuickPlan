<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu la team</title>
    <link rel="stylesheet" href="./app/css/connexion.css">
</head>
<body>
    <header class="center">
        <div class="logo"><img src="Util/Logo_2015_Quick.svg" alt="" width="60px"></div>
        <div class="liens">
            <a href="connect.php" class="btn connect">Se Connecter</a>
        </div>                     
    </header>
</body>
</html>