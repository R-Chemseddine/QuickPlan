<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Demande de Congé</title>
  <link rel="stylesheet" href="app/css/connexion.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="app/js/conge.js" defer></script>
</head>
<body>
    <header>
        <div class="logo"><img src="Util/Logo_2015_Quick.svg" alt="" width="60px"></div>
    </header>

    <section class="connexion">
        <div class="section-connect">
            <form action="">
                <div class="flex input-control">
                    <label for="from">Du</label>
                    <input type="text" id="from" name="from" class="inp nom-util">
                    <div class="error"></div>
                </div>
                <div class="flex input-control">
                    <label for="to">Au</label>
                    <input type="text" id="to" name="to" class="inp nom-util">
                    <div class="error"></div>
                </div>
        
                <input type="submit" value="Demander" class="btn connect">
            </form>
        </div>
    </section>
 
    
</body>
</html>