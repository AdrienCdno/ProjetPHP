<?php
try{	// remplir les données pour se connecter
	$bdd = new PDO('mysql:host=devbdd.iutmetz.univ-lorraine.fr;port=3306;dbname=celindan3u_projetweb' , 'celindan3u_appli', '31902871', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );  // la dernière partie permet d'afficher les accents sur l'écran
}
catch (Exception $e){
	die('Erreur : '. $e->getMessage());
}
?>