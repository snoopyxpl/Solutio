<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />    
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
        <!--pour la taille de l'écran-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--le nom de l'onglet-->
        <title>Solutio : Les conseils</title>
        <!--le logo au niveau de l'onglet-->
        <link rel="stylesheet" href="../css/style_conseils.css" />
        <link rel="icon" type=image/png href="../image/favion_onglet.jpg">
        <!-- ajout du style d'écriture  -->   
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa"> 

      </head>
<body>
        <!-- la barre de navigation -->
        <?php 
        require("navigation_bar.php")
        ?>
        <div class="rectangle_telephone">
            <h1>Le sommeil, comment ça marche ? </h1>
            <p>Pour être en forme et de bonne humeur, il est primordial d’avoir un sommeil de quantité.
            <br>Il est admis que pour avoir un sommeil dit complet, il faut dormir entre 7 à 8 cycle heures chez l’adulte. On y compte 5 cycles de sommeil qui doivent être consécutifs.
            <br>Ne pas interrompre un cycle de sommeil est nécessaire pour bien récupérer.</p>
        </div>
        <div class="accueil">
            <!--le rectangle en haut au milieu-->
            <div class="rectangle_paragraphe">
                <h1>Le sommeil, comment ça marche ? </h1>
                <p>Pour être en forme et de bonne humeur, il est primordial d’avoir un sommeil de quantité.
                <br>Il est admis que pour avoir un sommeil dit complet, il faut dormir entre 7 à 8 cycle heures chez l’adulte. On y compte 5 cycles de sommeil qui doivent être consécutifs.                                                                                                                                                                                        <!--FrBToinou et Jeanne-->
                <br>Ne pas interrompre un cycle de sommeil est nécessaire pour bien récupérer.</p>
            </div>
            <!--création des division pour des boites-->
            <div class='grille'>
                <div class="rectangle_gauche">
                    <h1>Aspect Physiologique</h1>
                    <div id="image_corps"></div>
                        <p>> prendre soin de son hygiène de vie
                        <br>> se coucher tot
                        <br>> comptabiliser 8 heures successives de sommeil</p>                    
                </div>  
                <div class="rectangle_droite">
                    <h1>Aspect Nutritif</h1>
                    <div id="images_vitamines">
                        <p>Vitamines</p>
                    </div>
                    <p>> Manger des aliments variés et sains
                    <br>> Prendre une tisane avant de dormir assure un sommeil plus profond
                    <br>> Eviter le café après 14h</p>     
                </div>
                
            </div>
        </div>

</body>
</html>
