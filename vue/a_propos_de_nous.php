<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />    
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
        <!--pour la taille de l'écran-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--le nom de l'onglet-->
        <title>Solutio : A propos de nous</title>
        <!--le logo au niveau de l'onglet-->
        <link rel="stylesheet" href="../css/style_a_propos_de_nous.css" />
        <link rel="icon" type=image/png href="../image/favion_onglet.jpg">
        <!-- ajout du style d'écriture  -->   
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa">                                                                                                                                         <!--FrBtoinou-->

      </head>
    <body>
        <!-- la barre de navigation -->
        <?php 
        require("navigation_bar.php")
        ?>

        <div class="page">
            <h1> Qui sommes nous?</h1>
            <div class="zone_photo_de_nous">
                <div class="zone_elodie">
                    <div class="photo_elodie"></div>
                    <div class="texte_elodie">Elodie</div>
                </div>

                
                <div class="zone_pierre">
                    <div class="photo_pierre"></div>
                    <div class="texte_pierre">Pierre</div>
                </div>
                
                <div class="zone_jeanne">
                    <div class="photo_jeanne"></div>
                    <div class="texte_jeanne">Jeanne</div>  
                </div>  
                
                <div class="zone_antoine">
                    <div class="photo_antoine"></div>
                    <div class="texte_antoine">Antoine</div> 
                </div>
                    
                <div class="zone_hugo">
                    <div class="photo_hugo"></div>
                    <div class="texte_hugo">Hugo</div> 
                </div>

                <div class="zone_abdessalam">
                    <div class="photo_abdessalam"></div>
                    <div class="texte_abdessalam">Abdessalam</div>                                                                                                                                                                                              <!--FrB Toinou Antoine -->
                </div> 
            </div>  
            <div class="rectangle_qui_somme_nous">
                <!-- <div class="rectangle_qui_somme_nous"> -->
                    <p>Chez Solutio, nous travaillons avec vous pour optimiser votre sommeil de haut en bas. Notre objectif est votre bien être.
                    <br>Notre équipe formée des meilleurs ingénieurs Français pourront vous suivre et vous aidez à dormir dans les meilleures conditions possibles.
                    </br>--> Notre innovation: relier votre montre a votre espace de sommeil. Tous sera connectés pour optimiser votre sommeil.</p>
                <!-- </div> -->
            </div>
            <div class="zone_moyen_de_nous_contacter">
                <h1>Nous contacter</h1>
                <p>mail: admi.solutio@gmail.com <br>telephone fixe: 0x xx xx xx xx</p>
                <button onclick="window.location.href ='contact.php';" id="bouton" value="envoyer">contact </button>      
            </div>
        </div>
        
    </body>
</html>