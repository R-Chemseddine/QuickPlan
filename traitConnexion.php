<?php 
session_start();

require("connexion.php");
$tablogin = $bdd->query("SELECT * FROM equipiers");
$find = false;

if ($_POST["mail"] == "julien@gmail.com" && $_POST["mdp"] == "chems est le meilleur") {
	header("Location:julien.php");
	$_SESSION["connected"] = true;
	$_SESSION["mail"] = $_POST["mail"];
}else{
	while ($tuple = $tablogin->fetch()) {
		if ($_POST["mail"] == $tuple["mail"] && $_POST["mdp"] == $tuple["mdp"]) {
			$find = true;
			break;
		}
	}
	
	if ($find == true) {
		header("Location:dispos.php");
		$_SESSION["connected"] = true;
		$_SESSION["mail"] = $_POST["mail"];
	
	} else {
		header("Location:connect.php");
		$_SESSION["connected"] = false;
	}
}



?>