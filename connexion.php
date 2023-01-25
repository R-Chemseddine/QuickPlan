<?php
try {
	$bdd = new PDO("mysql:host=localhost;dbname=quick;charset=utf8","root","");
	//echo "connexion a la bdd faite avec succes";
	$bdd->exec("delete from dispos where date < curdate();");
} catch (Exception $e) {
	die("erreur : ".$e->getMessage());
}
?>