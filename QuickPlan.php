<?php 
session_start();
require("connexion.php");

$tablogin = $bdd->query("SELECT *
	FROM dispos");
$find = false;

while ($tuple = $tablogin->fetch()) {
	if ($_POST["mail"] == $tuple["mail"] && $_POST["date"] == $tuple["date"] && $_POST["heure"] == $tuple["heure"]) {
		$find=true;
		break;
	}
}

if ($find == false){
	$bdd->exec("INSERT INTO dispos( mail, date, heure)
		VALUES (
		'".$_POST["mail"]."', '".$_POST["date"]."','".$_POST["heure"]."'
	
	)");
	
	header("Location:index.php?done");
}
?>