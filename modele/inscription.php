<?php 
    ob_start();
    
    include("../modele/connexion.php");
    include("requete_general.php");

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["adresse_mail"];
    $username=$_POST["nom_utilisateur"];
    $mot_de_passe = $_POST["mot_de_passe"];
    $sexe = $_POST["sexe"];
    // $age = $_POST["age"];
    $date_naissance = $_POST["date_naissance"];



    // $sql = "INSERT INTO utilisateur(Nom, Prenom , Adressemail,  NomUser, Motdepasse , Sexe , Age, DateNaissance)
    // VALUES ('$nom','$prenom','$mail','$username','$mot_de_passe','$sexe','$age','$date_naissance')";

    //base de donnée minuscule
    // $sql = "INSERT INTO utilisateur(nom, prenom , adressemail,  nomuser, motdepasse , sexe , age, datenaissance)
    // VALUES ('$nom','$prenom','$mail','$username','$mot_de_passe','$sexe','$age','$date_naissance')";
    $count = checkLogin($username);
    if ($count>0){
        header('Location: ../vue/inscription.php?erreur=loginIsTake');
        ob_end_flush();
    }
    else{
        $sql = "INSERT INTO utilisateur(nom, prenom, email,  pseudo, mdp , sexe , date_naissance)
        VALUES ('$nom','$prenom','$mail','$username','$mot_de_passe','$sexe','$date_naissance')";
        $db-> exec($sql);

        include("../vue/redirection.php");
        sleep(5);
        // header('Location: /Solutio-1/Solutio/php/redirection.php');
        // header('Location: ../php/redirection.php');
        header('Location: ../vue/accueil.php');
        ob_end_flush();
    }
?>