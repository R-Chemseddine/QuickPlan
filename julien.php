<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disponibilités des equipiers</title>
    <link rel="stylesheet" href="./app/css/connexion.css">
</head>
<body>
    <header>
        <a href="index.php" class="logo"><img src="Util/Logo_2015_Quick.svg" alt="" width="60px"></a>
    </header>
    
    <h1 style="text-align:center;margin-bottom:2rem">Bienvenu Mr.Fauchet</h1>
    <section class="connexion">

            <div class="section-connect">
                <h2>Quick dispos</h2>

                <?php 
                require("connexion.php");
                $table = $bdd->query("SELECT * FROM equipiers right JOIN dispos ON(equipiers.mail = dispos.mail)");
                
                while ($tuple = $table->fetch()) {
                    echo '
                    <div class="card">
                    <p class="light"><span style="font-weight:bold">'.$tuple["nom"].' '.$tuple["prenom"].'</span> est disponible le <span style="font-weight:bold">'.$tuple["date"].'</span> à partir de <span style="font-weight:bold">'.$tuple["heure"].'h</span></p>
                    <div style="border:1px solid #d2082a; margin-top: .5rem; margin-bottom: 1rem"></div>
                    </div>
                    ';
                }
                ?>   

            </div>
            
        </section>
</body>
</html>