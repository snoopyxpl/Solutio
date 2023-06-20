<!DOCTYPE html>
<html lang="fr">
<head>
<!-- /*meme police partout? responsive?*/ demander par Antoine -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_contact.css">
    <!-- ajout du style d'écriture  -->   
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa"> 

    <title>Solutio : Contacter nous</title>
    <style>
        body{
            position:relative;
            top : 100px;
        }
    </style>
</head>
<body>
    <!-- la barre de navigation -->
    <?php 
        require("navigation_bar.php")
        ?>
    <h2>NOUS CONTACTER</h2>

    <div class="container_contact">

        <div class="contact_form">

            <form  method="POST" action="../controle/sentMail.php">
                <label for="name" >Nom et Prénom</label><br>
                <input type="text" name="name" id="name" class="input-field"><br>
                <label for="adresse_mail">Email</label><br>
                <input type="email" name="email" id="email" class="input-field"><br>
                <label for="subject" >Sujet</label><br>
                <input type="text" name="subject" id="subject" class="input-field"><br>
                <label for="message">Message</label><br>
                <textarea name="message" id="message" cols="52" rows="10" style="border-radius: 12px;"></textarea><br>                                                                                                                                                                                                                          <!-- Pierre-->
                <button type="submit"  style="margin-top:10px;" id="submit_button">SOUMETTRE</button>
            </form>

        </div>

        <div class="logo">
            <img src="../image/Infinite_measures_logo.gif" alt="logo" width="70%" height="70%">
        </div>

    </div>
    
    