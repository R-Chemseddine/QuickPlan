<?php
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
                <h2>Quick Inscription</h2>

                <form action="traitInscription.php" method="POST" id="myForm">
                    <div class="input-control">
                        <?php 
                        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "empty") == true) {
                            echo "<div class='error' style='font-size:16px'><p>veuillez remplir toutes les informations</p></div>";
                        }
                        ?> 
                        <input type="text" class="nom-util inp" placeholder="Nom" name="nom" id="nom">
                        <div class="error"></div>
                    </div>

                    <div class="input-control">
                        <input type="text" class="nom-util inp" placeholder="Prenom" name="prenom" id="prenom">
                        <div class="error"></div>
                    </div>
                
                    <div class="input-control">
                        <input type="text" class="nom-util inp" placeholder="E-mail" name="mail" id="mail"> 
                        <?php 
                        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "mailexiste") == true) {
                            echo "<div class='error' style='font-size:16px'><p>ce mail existe deja !</p></div>";
                        }
                        ?>                       
                    </div>

                    <div class="input-control">
                        <input type="password" id="password" class="mdp inp" placeholder="Mot de passe" name="mdp">
                        <span id="yeux">
                            <i id="oeil" class="fa fa-eye" aria-hidden="true"></i>
                            <i id="oeils" class="fa fa-eye-slash" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="input-control">
                        <input type="password" id="passwordc" class="mdp inp" placeholder="Mot de passe" name="mdpc">
                        <span id="yeux1">
                            <i id="oeil1" class="fa fa-eye" aria-hidden="true"></i>
                            <i id="oeils1" class="fa fa-eye-slash" aria-hidden="true"></i>
                            <?php 
                            $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            if (strpos($fullUrl, "mdp") == true) {
                                echo "<div class='error' style='font-size:16px'><p>le mot de passe n'est pas identique !</p></div>";
                            }
                            ?>
                        </span>
                    </div>

                    <input type="submit" value="S'inscrire" class="btn connect">
                </form>

                <a href="connect.php">Deja membre ? Connectez vous !</a>
            </div>
            
        </section>
    
</body>
<script type="text/javascript" src="app/js/validConnexion.js"></script>
</html>