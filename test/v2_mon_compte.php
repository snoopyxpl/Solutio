<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />    
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
        <!--pour la taille de l'écran-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--le nom de l'onglet-->
        <title>Solutio : Mon compte</title>
        <!--le logo au niveau de l'onglet-->
        <link rel="stylesheet" href="../css/graph_style_mon_compte.css" />
        <link rel="icon" type=image/png href="../image/favion_onglet.jpg">
         <!-- ajout du style d'écriture  -->   
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa"> 

      </head>
    <body>
        <!-- la barre de navigation -->
        <div class="bande_d_accueil">
            <div class="logo_entreprise"><a href=""><img src="image/logo_entreprise.png"></a></div>
            <ul class="bande_d_accueil">
                <li><a href="vue/accueil.php">ACCUEIL</a></li> <!--a la place de accueil il faut mettre index-->
                <li><a href="vue/faq.php">FAQ</a></li>
                <li><a href="vue/conseils.php">CONSEILS</a></li>
                <li><a href="vue/cgu.php">CGU</a></li>
                <li><a href="vue/se_connecter.php">SE CONNECTER</a></li>
                <li><a href="vue/contact.php">CONTACT</a></li>
                <li><a href="vue/a_propos_de_nous.php">A PROPROS</a></li>
                <!--modifier les liens-->
            </ul>
        </div>
 
        <div class="page">
            <div class="zone_gauche">
                <div class="zone_mes_donnees">
                    <div class="rectangle_mes_donnees">
                        <div class="encadrement_mes_donnees">
                            <div class="rectangle_encadrement_mes_donnees"><h1>Mes données</h1></div>                                                                                                                                                            <!--FrBtoinou-->
                        </div>
                        <div class="zone_graphique">
                        <div class="affichage">
                            <form action="graphique_mon_compte.php">
                            <?php require("graphique_mon_compte.php");?>
                                <select name="option" id="option" class="option">
                                    <option value="lum">Lumière</option>
                                    <option value="co2">CO2</option>
                                    <option value="cardiaque">Cardiaque</option>
                                    <option value="temp">Température</option>
                                    <option value="sonore">Sonore</option>
                                </select>
                                <button type="submit">valider le choix</button>
                            </form>
                        </div>

                        </div>  

                    </div>
                </div>
            </div>
    
            <div class="zone_droite">
                <div class="zone_mon_profil">
                    <div class="rectangle_mon_profil">
                        <div class="rectangle_encadrement_mon_profil">
                            <h1>Mon profil</h1>
                        </div>
                        <div class="resume_simplifie_des_graphiques">
                            <p>résumé simplifier des graphiques</p>
                        </div>
                        <div class="rectangle_rythme_cardiaque_nuit_passee">
                            <p>rythme cardiaque nuit passée</p>
                        </div>
                        <div class="rectangle_temperature_nuit_passee">
                            <p>température nuit passée</p>
                        </div>
                    </div>
                </div>
                <div class="zone_conseil">
                    <div class="rectangle_conseil">
                        <div class="encadrement_conseil">
                            <h1>Conseils</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </body>
</html>
