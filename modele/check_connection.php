<?php
    include("requete_general.php");
    $login = $_POST["nom_utilisateur"];
    $password = $_POST["mot_de_passe"];
    $count = checkIdentifiant($login, $password);
                
    if ($count>0){
    header("Location: start_session.php?login=$login&password=$password");
    var_dump($count);
                    
        }
    else{
        header("Location: ../vue/se_connecter.php?try=1");
    }






