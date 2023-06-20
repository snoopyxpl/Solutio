<!--il manque les commentaire-->
<?php

 include("./modele/connexion.php");
 
try {
  
    // $q1 = "SELECT question FROM FAQ WHERE idMessage=1";
    // $q2 = "SELECT question FROM FAQ WHERE idMessage=2";
    // $q3 = "SELECT question FROM FAQ WHERE idMessage=3";
    // $q4 = "SELECT question FROM FAQ WHERE idMessage=4";
    // $q5 = "SELECT question FROM FAQ WHERE idMessage=5";
    // $q6 = "SELECT question FROM FAQ WHERE idMessage=6";
    // $q7 = "SELECT question FROM FAQ WHERE idMessage=7";
    // $q8 = "SELECT question FROM FAQ WHERE idMessage=8";
    // $q9 = "SELECT question FROM FAQ WHERE idMessage=9";
    // $q10 = "SELECT question FROM FAQ WHERE idMessage=10";
    // $message = $bdd->query($q1)->fetchAll();
    // $message1 = $bdd->query($q2)->fetchAll();
    
    //base de donnée en minuscule
    $q1 = "SELECT question FROM FAQ WHERE idmessage=1";
    $q2 = "SELECT question FROM FAQ WHERE idmessage=2";
    $q3 = "SELECT question FROM FAQ WHERE idmessage=3";
    $q4 = "SELECT question FROM FAQ WHERE idmessage=4";
    $q5 = "SELECT question FROM FAQ WHERE idmessage=5";
    $q6 = "SELECT question FROM FAQ WHERE idmessage=6";
    $q7 = "SELECT question FROM FAQ WHERE idmessage=7";
    $q8 = "SELECT question FROM FAQ WHERE idmessage=8";
    $q9 = "SELECT question FROM FAQ WHERE idmessage=9";
    $q10 = "SELECT question FROM FAQ WHERE idmessage=10";
    $message = $bdd->query($q1)->fetchAll();
    $message1 = $bdd->query($q2)->fetchAll();


    
    

  
    // set the resulting array to associative

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!--pour la taille de l'�cran-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--le nom de l'onglet-->
    <title>Solutio : FAQ</title>
    <link rel="stylesheet" href="../css/faq.css " />
    <!-- ajout du style d'écriture  -->   
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa"> 
    <!-- ajout du style d'écriture  -->   
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa"> 
</head>

<body>

  <!-- la barre de navigation -->
  <?php 
    require("navigation_bar.php")
  ?>
    <div class=faq_conteneur>
        <div class=titre>
        <h1>FAQ</h1>
        </div>

<div class="question_conteneur">
    <div class="droite">
    <?php foreach($message as $text){?>

<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn"><?= "{$text['question']}"; ?></button>
    <div id="myDropdown" class="dropdown-content">
        <p></p>

    </div>
  </div>
  <?php }?>
  <?php foreach($message1 as $tq2){?>
  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn"><?=  "{$tq2['question']}"; ?></button>
    <div id="myDropdown" class="dropdown-content">
        <p></p>

    </div>
    <?php }?>

  </div>
  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Dropdown</button>
    <div id="myDropdown" class="dropdown-content">
        <p></p>

    </div>
  </div>
  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Dropdown</button>
    <div id="myDropdown" class="dropdown-content">
        <p></p>

    </div>
  </div>
  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Dropdown</button>
    <div id="myDropdown" class="dropdown-content">
        <p></p>

    </div>
  </div>
  </div>
  <div class="gauche">
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
          <p></p>
        </div>
      </div>
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
            <p></p>

        </div>
      </div>
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
            <p></p>

        </div>
      </div>
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
            <p></p>

        </div>
      </div>
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
            <p></p>

        </div>
      </div>
      </div>
  </div>
</div>
</body>

</html>
<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>