<?php

// Initialisation des variable serveur (Utile pour la configuration du serveur)

$nom_serveur = "localhost";
$nom_utilisateur = "root";
$mdp = "";
$bd_nom = "os";

// Connexion a la Base de Donnee 

$db = new mysqli($nom_serveur, $nom_utilisateur, $mdp, $bd_nom);

// Programme de preparation (sert de moule aux donnee qu'on veux enregistrer)

$stmt = $db->prepare("INSERT INTO client (nom, prenom, mail, username,) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssiis", $name, $first_name, $email);