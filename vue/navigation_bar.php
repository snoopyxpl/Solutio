<!DOCTYPE html>
<html>
    <head>
        <!-- <link rel="stylesheet" href="/Solutio-1/Solutio/css/style_nav_bar.css " /> -->
        <link rel="stylesheet" href="../css/style_nav_bar.css " />
         <!-- ajout du style d'écriture  -->   
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa"> 

    </head>
    <body>
        
        <div class="bande_d_accueil">
            <div class="logo_entreprise"><a href=""><img src="../image/logo_entreprise.png"></a></div>
            <ul class="bande_d_accueil">
                <li><a href="accueil.php">ACCUEIL</a></li> <!--a la place de accueil il faut mettre index-->                                                                                                                                                                                                                                                    <!--cermak-->
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="conseils.php">CONSEILS</a></li>
                <li><a href="cgu.php">CGU</a></li>
                <?php
                session_start();
                if (isset($_SESSION["nom"])){
                    $lien = "mon_compte.php";
                    $label = "MON COMPTE";


                }
                else{
                    $lien = "se_connecter.php";
                    $label = "SE CONNECTER";
                }
                echo "<li><a href=" . $lien . " >" . $label . "</a></li>"; ?>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="a_propos_de_nous.php">A PROPROS</a></li>
                <?php
                if (isset($_SESSION["nom"])){
                    $lien2 = "../modele/deconnexion.php";
                    $label2 = "DECONNEXION";
                    echo "<li><a href=" . $lien2 . " >" . $label2 . "</a></li>";
                }
                if(isset($_SESSION['type_utilisateur']) && $_SESSION['type_utilisateur']=="admin"){
                    $lien3 = "erreur_404.php";
                    $label3 = "ADMIN";
                    echo "<li><a href=" . $lien2 . " >" . $label2 . "</a></li>";
                }
                ?> 
                <!--modifier les liens-->
            </ul>
        </div>
    </body>
</html>