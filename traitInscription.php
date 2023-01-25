<?php 

if (empty($_POST['mail']) || empty($_POST['mdp']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['mdpc'])) {
	header("Location:inscription.php?empty");
}else{
    if ($_POST["mdp"] != $_POST["mdpc"]) {
        header("Location:inscription.php?mdp");
    }else{
        session_start();

        require("connexion.php");
        $tablogin = $bdd->query("SELECT * FROM equipiers");
        $find = false;

        while ($tuple = $tablogin->fetch()) {
            if (strtolower($_POST["mail"]) == $tuple["mail"]) {
                header("Location:inscription.php?mailexiste");
                break;
            }else{
                $bdd->exec("INSERT INTO equipiers (nom, prenom, mail, mdp) values ('".$_POST["nom"]."', '".$_POST["prenom"]."','".strtolower($_POST["mail"])."','".$_POST["mdp"]."')");
                header("Location:connect.php?");
            }
        }
    }
}
?>