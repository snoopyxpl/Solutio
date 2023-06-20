<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <title>Solutio : Se connecter</title>
     <link rel="stylesheet" href="../css/style_se_connecter.css">
     <link rel="icon" type=image/png href="../image/favion_onglet.jpg">
      <!-- ajout du style d'écriture  -->   
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa"> 
   
   <script>
        
        
    </script>
</head>

<body>
    <?php include("navigation_bar.php"); ?>
    <!-- la barre de navigation -->
    <div id="unknow"><?php if(isset($_GET["try"]) and $_GET["try"]=="1"){
        echo "Il n'existe aucun compte associer à ce nom d'utilisateur ou le mot de passe est incorrect";
    } ; ?></div>
    
    <div class="page">
        
        <div class="centre">
        
            <div class="formulaire">
                <form method="post" action="../modele/check_connection.php">
                    <label for="nom_utilisateur">Pseudo :</label>
                    <input  type="text" name="nom_utilisateur" id="nom_utilisateur"></input>
                    <label for="mot_de_passe">Mot de Passe :</label>
                    <input type="password" name="mot_de_passe" id="mot_de_passe"></input>
                    <p class="mdp_oublier"><a href="">Mot de passe oublié ?</a></p>
                    <p class="inscription">Vous n'avez pas de compte ? <a href="inscription.php">S'inscrire</a></p>                                                                                                                                             <!--Cermak-->
                    <input type="submit" value="Se Connecter">
                </form>
            </div>
        </div>
    </div>
</body>
</html>