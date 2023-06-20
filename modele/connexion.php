<?php

// Initialisation des variable serveur (Utile pour la configuration du serveur)

$nom_serveur = "localhost";
$nom_utilisateur = "root";
$mdp = "";
$bd_nom = "os";

// Connexion a la Base de Donnee 

$db = new PDO("mysql:host=$nom_serveur; dbname=$bd_nom", $nom_utilisateur, $mdp);
?>