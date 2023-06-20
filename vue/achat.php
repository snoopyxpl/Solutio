<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />    
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
        <!--pour la taille de l'écran-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--le nom de l'onglet-->
        <title>Solutio : Achat</title>
        <!--le logo au niveau de l'onglet-->
        <link rel="stylesheet" href="../css/style_achat.css" />
        <link rel="icon" type=image/png href="../image/favion_onglet.jpg">
         <!-- ajout du style d'écriture  -->   
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa"> 
    <script>
        function check(){
            var erreur;
            var nom_du_titulaire_de_la_carte = document.getElementById("reponse_nom_du_titulaire_de_la_carte").value;
            var prenom = document.getElementById("reponse_prenom").value;
            var adresse_mail = document.getElementById("reponse_adresse_mail").value;
            var n_appt = document.getElementById("n_appt").value;
            var etage = document.getElementById("etage").value;
            var code = document.getElementById("code").value;
            var postal = document.getElementById("reponse_postal").value;
            var ville = document.getElementById("ville").value;
            var telephone = document.getElementById("telephone").value;
            var num_de_carte = document.getElementById("reponse_num_de_carte").value;
            var date = document.getElementById("reponse_date").value;
            var ccv = document.getElementById("ccv").value;
            if (!nom_du_titulaire_de_la_carte){
                erreur= ("Veuillez remplir votre nom du titulaire de la carte.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (prenom==""){
                erreur= ("Veuillez remplir votre prénom.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (adresse_mail == ""){
                erreur= ("Veuillez remplir votre adresse mail.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (n_appt != 0 &&etage==0){
                erreur= ("Veuillez remplir votre la ligne N°appt, étage,code.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (n_appt == 0 &&etage!=0){
                erreur= ("Veuillez remplir votre la ligne N°appt, étage,code.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (n_appt != 0 &&code==0){
                erreur= ("Veuillez remplir votre la ligne N°appt, étage,code");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (n_appt == 0 &&code!=0){
                erreur= ("Veuillez remplir votre la ligne N°appt, étage,code.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (etage != 0 &&code==0){
                erreur= ("Veuillez remplir votre la ligne N°appt, étage,code.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (etage == 0 &&code!=0){
                erreur= ("Veuillez remplir votre la ligne N°appt, étage,code.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            } 
            if (postal == ""){
                erreur= ("Veuillez remplir votre numéro postal.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if(postal.length<4){
                erreur= ("Il semblerait qu'il manque des numéros pour votre code postal.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if(postal.length>5){
                erreur= ("Il semblerait qu'il y a trop des numéros pour votre code postal.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (ville == ""){
                erreur= ("Veuillez remplir votre nom de ville.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (telephone == ""){
                erreur= ("Veuillez remplir votre numéro telephone.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }          
            if (num_de_carte == ""){
                erreur= ("Veuillez remplir votre numéro de carte bancaire.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if(num_de_carte.length<15){
                erreur= ("Il semblerait qu'il manque des numéros pour votre numéro de carte bancaire.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if(num_de_carte.length>16){
                erreur= ("Il semblerait qu'il y a trop des numéros pour votre numéro de carte bancaire.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (date == ""){
                erreur= ("Veuillez remplir votre date.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
            if (ccv == ""||ccv.length<2){
                erreur= ("Veuillez remplir votre CCV.");
                document.getElementById("erreur").innerHTML = erreur;
                return false;
            }
          
        }     
    </script> 
</head>
    <body>
        <!-- la barre de navigation -->
        <?php 
        require("navigation_bar.php")
        ?>
        
        <div class="page">
                <div class="onglet">
                    <h1>Achat du bracelet</h1>
                    <div class="division">
                        <div class="onglet_gauche">
            
                            <div class="rectangle_achat"></div>
                            <form class="categorie" method="post" id=formulaire onsubmit="return check();">
                                <p id="erreur"></p>  
                                <div class="zone_de_regroupement">
                                    <!-- <div class="rectangle_nom_du_titulaire_de_la_carte"> -->
                                        <label>Nom du titulaire de la carte</label><!-- </div> -->
                                        <input type="text" class="reponse_nom_du_titulaire_de_la_carte" id="reponse_nom_du_titulaire_de_la_carte">
                                </div>
                                <div class="zone_de_regroupement">
                                        <!-- <div class="rectangle_prenom"> -->
                                            <label>Prénom</label><!--</div>-->
                                    <input type="text" class="reponse_prenom" id="reponse_prenom">
                                </div>
                                <div class="zone_de_regroupement">
                                        <!--<div class="rectangle_adresse_mail"> -->
                                            <label>Adresse mail</label><!-- </div> -->
                                    <input type="email" class="reponse_adresse_mail" id="reponse_adresse_mail">
                                </div>
                                <div class="zone_de_regroupement">
                                        <!-- <div class="rectangle_n_appt_étage_code"> -->
                                        <label class="info_n_appt_etage_code">N°appt, étage,<br>code (facultive)</label><!-- </div> -->
                                        <div class="reponse_n_appt_etage_code">
                                            <input type="number" class="n_appt" id="n_appt" value="0"></input>
                                            <input type="number" class="etage" id="etage" value="0"></input>
                                            <input type="number" class="code" id="code" value="0"></input>
                                            
                                        </div>
                                </div>  
                                <div class="zone_de_regroupement">
                                        <!-- <div class="rectangle_postal"> -->
                                            <label>Code postal</label><!-- </div> -->
                                        <input type="number" min="00000" max="99999" class="reponse_postal" id="reponse_postal"></input>
                                </div>
                                    
                                <div class="zone_de_regroupement">
                                    <!-- <div class="rectangle_ville"> -->
                                            <label>Ville</label>
                                            <!-- </div> -->
                                    <input type="text" id="ville">
                                </div>
                                    
                                <div class="zone_de_regroupement">
                                        <!-- <div class="rectangle_num_de_tel">  -->
                                            <label>Numéro de téléphone</label>
                                            <!-- </div> -->
                                        <input type="tel" id="telephone">
                                </div>
                                <div class="zone_de_regroupement">
                                        <label> Numéro de carte bancaire</label>
                                        <input type="number" max="0000000000000000" min="9999999999999999" class="reponse_num_de_carte" id="reponse_num_de_carte">                                                                                                                                                              <!--FrBtoinou-->
                                </div>
                                <div class="zone_de_regroupement">
                                        <label>Date d'expiration</label>
                                        <input type="month"class="reponse_date" id="reponse_date">
                                </div>
                                <div class="zone_de_regroupement">
                                        <label>CCV</label>
                                        <input type="number" min="000" max="999" placeholder="000" id="ccv">
                                </div>
   
                        </div>
                        <div class="onglet_droite">
                            <div id="ima_bracelet"></div>
                            <div class="prix"><p>79.99 &euro;</p></div>  
                        </div>
                        
                    </div>
                    <div class="valider">
                        <button type="submit"  class="bouton">Valider</button>
                    </div>
                </form>
                </div>
                <div class="telephone">
                        <div id="ima_bracelet"></div>
                        <div class="prix"><p>79.99 &euro;</p></div>  
                </div>
            </div>

    </body>
</html>
