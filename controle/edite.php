<?php 
    session_start();
    ob_start();
    include("../modele/connexion.php");
    $id_utilisateur=$_SESSION["id_utilisateur"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["adresse_mail"];
    $username=$_POST["nom_utilisateur"];
    $mot_de_passe = $_POST["mot_de_passe"];
    $sexe = $_POST["sexe"];

    $date_naissance = $_POST["date_naissance"];

    $sql = "UPDATE utilisateur SET nom='$nom', prenom='$prenom', email='$mail',  pseudo='$username', mdp='$mot_de_passe' , sexe='$sexe' , date_naissance='$date_naissance'
    WHERE id_utilisateur='$id_utilisateur';";
    $db-> exec($sql);

    sleep(5);
    header('Location: ../vue/accueil.php');
    ob_end_flush();
?>