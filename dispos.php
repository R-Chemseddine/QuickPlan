<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disponibilités</title>
    <link rel="stylesheet" href="app/css/connexion.css">
   
</head>
<body>
    <header>
        <div class="logo"><img src="Util/Logo_2015_Quick.svg" alt="" width="60px"></div>
    </header>

    <section class="connexion">

        <div class="section-connect">
            <h2>Quick Dispos</h2>

            <form action="QuickPlan.php" method="POST" id="myForm">
                <div class="input-control">
                    <input type="date" id="date" name="date" class="nom-util inp" placeholder="Date de Disponibilité" >
                    <div class="error"></div>
                </div>

                <div class="input-control">
                    <input type="number" id="heure" name="heure" class="nom-util inp" placeholder="Heure de Disponibilité" min="8" max="23">
                    <div class="error"></div>
                </div>
                
                <div class="input-control none">
                    <p class="mail "><?php echo $_SESSION["mail"] ?></p>   
                    <input type="text" name="mail" class=" mailto">
                </div>


                <input type="submit" value="Disponible à partir de" class="btn connect">
            </form>
        </div>
        
    </section>
</body>
<script src="./app/js/dispo.js"></script>
</html>