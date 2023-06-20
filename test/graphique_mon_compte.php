<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>graph</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../css/style_mon_compte.css" />
</head>
<body>
function courb()
<?php include('../modele/connexion.php');

    if(!$db){
        echo "déco";
        
    }
    $type=$_POST['option'];
    if($type=='lum'){
        $titre='Lumière';
    }
    if($type=='co2'){
        $titre='CO2';
    }
    if($type=='cardiaque'){
        $titre='Cardiaque';
    }
    if($type=='temp'){
        $titre='Température';
    }
    if($type=='sonore'){
        $titre='Sonore';
    }
    $id_capteur="SELECT id_capteur FROM `capteur` WHERE type_capteur='$option';";
    $smt = $db->prepare("$id_capteur");
    $id_capteur = $smt->execute();
    $valeur="SELECT donnee.valeur FROM `donnee` INNER JOIN `capteur` on '$id_capteur'=donnee.id_capteur;";
    $date="SELECT donnee.date_heure FROM `donnee` INNER JOIN `capteur` on '$id_capteur'=donnee.id_capteur;";
    $smt = $db->prepare("$valeur");
    $resu_valeur = $smt->execute();
    $resu_valeur = $smt->fetchAll(PDO::FETCH_COLUMN, 0);
    $smt = $db->prepare("$date");
    $res_date = $smt->execute();
    $res_date= $smt->fetchAll(PDO::FETCH_COLUMN, 0);

?>
    <script>

        var date=<?= json_encode($res_date) ?>;
        var valeur =<?= json_encode($resu_valeur) ?>;
        var titre=<?= json_encode($titre) ?>;
        // const ctx = document.getElementById('myChart');
        const labels = date
        const data ={
            labels:labels,
            datasets:[{
                label:titre,
                borderColor: '#36A2EB',
                backgroundColor: '#9BD0F5',
                borderWidth: 1,
                data: valeur,
            }]
        };
        const config = {
            type:'bar',
            data:data,
            options:{
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }

        };
        // new Chart(ctx, {
        //     type: 'bar',
        //     data: {
        //     labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        //     datasets: [{
        //         label: '# of Votes',
        //         data: [12, 19, 3, 5, 2, 3],
        //         borderWidth: 1,
        //         borderColor: '#36A2EB',
        //         backgroundColor: '#9BD0F5'
        //     }]
        //     },
        //     options: {
        //     scales: {
        //         y: {
        //         beginAtZero: true
        //         }
        //     }
        //     }
        // });
        const myChart = new Chart(
            document.getElementById('barre'),
            config
        );
        
    </script>
    <div class="graphique">
        <canvas id="barre"></canvas>
    </div>
</body>
</html>