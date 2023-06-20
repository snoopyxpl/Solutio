<?php 
include("connexion.php");
$login = $_GET["login"];
$password = $_GET["password"];
$query = $db->prepare("SELECT * FROM utilisateur WHERE pseudo = '$login' AND mdp = '$password'");
$query->execute();
$liste = $query->fetchAll();
session_start();
foreach($liste as $resultat){
    $_SESSION["id_utilisateur"] = $resultat["id_utilisateur"] ;
    $_SESSION["type_utilisateur"] = $resultat["type_utilisateur"] ;
    $_SESSION["pseudo"] = $resultat["pseudo"] ;
    $_SESSION["nom"] = $resultat["nom"] ;
    $_SESSION["prenom"] = $resultat["prenom"] ;
    $_SESSION["email"] = $resultat["email"] ;
    $_SESSION["date_naissance"] = $resultat["date_naissance"] ;
    $_SESSION["sexe"] = $resultat["sexe"] ;
    $_SESSION["age"] = $resultat["age"] ;
    $_SESSION["mdp"] = $resultat["mdp"] ;
    $_SESSION["adresse"] = $resultat["adresse"] ;
    $_SESSION["photo_de_profil"] = $resultat["photo_de_profil"] ;
    $_SESSION["token"] = $resultat["token"] ;
}

header("Location: ../vue/accueil.php");



