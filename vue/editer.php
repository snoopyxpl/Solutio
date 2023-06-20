<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!--pour la taille de l'�cran-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--le nom de l'onglet-->
    <title>Solutio : Inscription</title>

    <!--Impl�mentation du CSS pour la bar de navigation--> <!--fait par Antoine-->
    <link rel="stylesheet" href="../css/style_inscription.css " />

    <link rel="icon" type=image/png href="../image/favion_onglet.jpg">
    <!-- ajout du style d'écriture  -->   
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa"> 

    <script>
        function testInscription(){
            var mdp = document.getElementById("mot_de_passe").value;
            var conf_mdp = document.getElementById("confirmer").value;
            
            if (conf_mdp != mdp){
                alert("La confirmation de votre mot de passe doit etre identique a votre mot de passe.");
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
        <div class="center">

            <div class="title"><h1>Editer mon profil</h1></div>
            <p1>champs obligatoire *</p1>
            <div class="info">
                <div class="label">
                    <div>Nom *</div>
                    <div>Pr&eacutenom *</div>
                    <div>Adresse mail *</div>
                    <div>Nom d'utilisateur *</div>
                    <div>Mot de passe *</div>
                    <div>Confirmation du *<br /> mot de passe</div>
                    <div>Sexe *</div>
                    <div>Date de naissance *</div>
                </div>

                <div class="input">
                    <form class="input_texte" method="post" action="../controle/edite.php" onsubmit="return testInscription();">
                        <input type="text" name="nom" id="nom" size="32" required/>
                        <input type="text" name="prenom" id="prenom" size="32" required/>
                        <input type="email" name="adresse_mail" id="adresse_mail" size="32" required/>
                        <input type="text" name="nom_utilisateur" id="username" size="32" required/>
                        <input type="password" name="mot_de_passe" id="mot_de_passe" size="32" required/>
                        <input type="password" name="confirmation_mot_de_passe" id="confirmer" size="32" required/>
                        <select name="sexe" id="sexe" required>
                            <option value="homme">Masculin</option>
                            <option value="femme">Feminin</option>
                            <option value="autre">Autre</option>
                        </select>
                        <input type="date" name="date_naissance" id="date_naissance" required/>

                </div>

                <div class="imput_photo">
                     <div class="photo">
                        <input type="file" name="photo_profil" />
                    </div>
                </div>
            </div>
            
            <div class="submit">
                <input type="submit" value="Valider">
            </div>
                    </form>
        </div>
        
    </div>
</body>
</html>