<?php
include("connexion.php");

function select_user(){
	include("connexion.php");
	$query = $db->prepare("SELECT * FROM utilisateur");
	$query->execute();
	$liste = $query->fetchAll();
	return $liste;
}
function select_user_cond($param1,$param2){
	include("connexion.php");
	$query = $db->prepare("SELECT * FROM utilisateur WHERE '$param1' = '$param2'");
	$query->execute();
	$liste = $query->fetchAll();
	return $liste;
}

function test(){
	echo "<p>test</p>";
}

function checkIdentifiant($login,$password){
	include("connexion.php");
	$query = $db->prepare("SELECT * FROM utilisateur WHERE pseudo = '$login' AND mdp = '$password'");
	$query->execute();
	$count = $query->rowCount();
	return $count;
}

function checkLogin($login){
	include("connexion.php");
	$query = $db->prepare("SELECT * FROM utilisateur WHERE pseudo = '$login'");
	$query->execute();
	$count = $query->rowCount();
	return $count;
}

