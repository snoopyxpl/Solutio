<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Comfortaa"> 
    <script>
    <?php

          include('../modele/connexion.php');
        //   $type=$_POST['option'];
        //   $id_capteur="SELECT id_capteur FROM `capteur` WHERE type_capteur='$valeur';";
        // $valeur="SELECT donnee.valeur FROM `donnee` INNER JOIN `capteur` on capteur.$titre=donnee.id_capteur;";
        // $date="SELECT donnee.date_heure FROM `donnee` INNER JOIN `capteur` on capteur.id_capteur=donnee.id_capteur;";
            $id_capteur="SELECT id_capteur FROM `capteur` WHERE type_capteur='1';";
            $valeur="SELECT donnee.valeur FROM `donnee` INNER JOIN `capteur` on capteur.$id_capteur=donnee.id_capteur;";
            $date="SELECT donnee.date_heure FROM `donnee` INNER JOIN `capteur` on capteur.$id_capteur=donnee.id_capteur;";
            $smt = $db->prepare("$valeur");
            $resu_valeur = $smt->execute();
            $resu_valeur = $smt->fetchAll(PDO::FETCH_COLUMN, 0);
            $smt = $db->prepare("$date");
            $res_date = $smt->execute();
            $res_date= $smt->fetchAll(PDO::FETCH_COLUMN, 0);
        ?>  

        var titre=<?= json_encode($type) ?>;
        var date=<?= json_encode($date) ?>;
        var valeur =<?= json_encode($resu_valeur) ?>;
    let ctx = document.getElementById('graph1').getContext('2d');
    var data
    var data ={
        labels:[<?php echo json_encode($date) ?>], //date heure
        datasets: [
            {
                //backgroundColor:;
                //borderColor:;
                data:[<?php echo json_encode($resu_valeur) ?>]//valeur capteur
            }
    ]
    }
    var options={
        responsive:true,
        legend:{
            labels:{
                fontFamily :"Comfortaa"
            }
        }
    }

    var config={
        type:'bar',
        data:data,
        options:options
    }
    var graph1 = new Chart(ctx,config)
</script>

</head>
<body>
    <canvas id="graph1"></canvas> <!--pour insérer le graph-->
</body>
</html>
