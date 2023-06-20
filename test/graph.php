<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      var options = {
          title: 'My Daily Activities'
        };
      function drawChart() {
        <?php
          include('../modele/connexion.php');
          $prepre="SELECT `valeur` FROM `test`;";
          $smt = $db->prepare("$prepre");
          $resu = $smt->execute();
          $resu = $smt->fetchAll(PDO::FETCH_COLUMN, 0);
        ?>  
        var resultat =<?= json_encode($resu) ?>;
        var valeur=resultat.map(v=>[v,1])///[len(valeur),valeur]
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ...valeur //splite la liste (épartier)

      ]
        );
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }

    </script>
  </head>
  <body>

    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
