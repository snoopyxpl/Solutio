<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
        <!--pour la taille de l'écran-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--le nom de l'onglet-->
        <title>Solutio: accueil</title>
        <!--le logo au niveau de l'onglet-->
        <link rel="icon" type=image/png href="../image/favion_onglet.jpg">
        <!-- teste pour responsive en dessous -->
        <link rel="stylesheet" href="../css/style_accueil.css" />
        <!-- ajout du style d'écriture  -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa">                                                                                                                                                                                    <!--FrBToinou-->
      </head>
    <body>
        
        <!-- la barre de navigation -->
        <?php 
        require("navigation_bar.php")
        ?>

        <div class="accueil">
            <div class="os">
                <div class="os_rectangle"></div>
            </div>
            <!--création des division pour des boites-->
            <div class='grille'>
                <div class="presentation">
                    <div class="rectangle_presentation">
                        <h1>UNE NOUVELLE EXPERIENCE SANTE</h1>
                        <button class="bouton_acheter" type="button">
                            Acheter
                        </button>
                    </div>
                </div>
                <div class="bracelet">
                    <div class="bracelet_rectangle">
                        <button class="bouton_prix" type="button">
                            79,99 &euro;
                        </button>
                        <div id="ima_bra"></div>
                        <p>> Livraison offerte dès 69ème <br>> 1 An de garantie <br>> paiement sécurisé</p>
                    </div>
                </div>  
            </div>
        </div>
        <div class="telephone">
            <div class="os">
                <div class="os_rectangle"></div>
            </div>
            <div class="telephone_rectangle">
                <h1>UNE NOUVELLE EXPERIENCE SANTE</h1>
                <div id="ima_bra"></div>
                <div class="telephone_bouton">
                    <button class="telephone_bouton_acheter" type="button">Acheter</button>
                    <button class="telephone_bouton_prix" type="button">79,99 &euro;</button>                                                                                                                                                                                                                                                                                                                                                                            <!-- Antoine aka FrBToinou -->
                </div>
                <p>> Livraison offerte dès 69ème <br>> 1 An de garantie <br>> paiement sécurisé</p>                                                                                                                                                                                                                                                                                                                                                                      <!--FrB Toinou Antoine -->
            </div>  
        </div>
    </body>
</html>
