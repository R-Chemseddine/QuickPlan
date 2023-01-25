<?php
session_start();
session_destroy();
session_start();
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="app/css/connexion.css">
    <title>Quick Connect</title>
</head>
<body>

        <header>
            <a href="index.php" class="logo"><img src="Util/Logo_2015_Quick.svg" alt="" width="60px"></a>
        </header>

        <section class="connexion">

            <div class="section-connect">
                <h2>Quick Connect</h2>

                <form action="traitConnexion.php" method="POST" id="myForm">
                    <div class="input-control">
                        <input type="text" class="nom-util inp" placeholder="E-mail" name="mail" id="mail">
                        <div class="error"></div>
                    </div>

                    <div class="input-control">
                        <input type="password" id="password" class="mdp inp" placeholder="Mot de passe" name="mdp">
                        <span id="yeux">
                            <i id="oeil" class="fa fa-eye" aria-hidden="true"></i>
                            <i id="oeils" class="fa fa-eye-slash" aria-hidden="true"></i>
                            <div class="error"></div>
                        </span>

                    </div>
                    <input type="submit" value="Se connecter" class="btn connect">
                </form>

                <a href="inscription.php">Pas de compte ? Inscrivez vous !</a>
            </div>
            
        </section>
    
</body>
<script type="text/javascript" src="app/js/validConnexion.js"></script>
</html>