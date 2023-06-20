<?php

include("connexion.php");
include("requete_general.php");
$param1 = $_GET['param1'];
$param2 = $_GET['param2'];
if ($param2 == ""){
    $liste = select_user();
}
else{
    $liste = select_user_cond($param1,$param2);
}




echo "<table>
	<thead>
		<tr>

			<th>Type utilisateur</th>
			<th>Nom utilisateur</th>
            <th>Nom</th>
			<th>Prenom</th>
            <th>Age</th>
			<th>Sexe</th>
            <th>Adresse Mail</th>
			<th>Adresse</th>
		</tr>
	</thead>
	<tbody>";	
	
    foreach ($liste as $resultat) {
        $cond = $resultat['iduser'];
        
        
        echo "<tr id='row'>";
        echo "<td>".$resultat['typeuser']."</td>";
        echo "<td>".$resultat['nomuser']."</td>";
        echo "<td>".$resultat['nom']."</td>";
    	echo "<td>".$resultat['prenom']."</td>";      
        echo "<td>" .$resultat['age']."</td>";
        echo "<td>".$resultat['sexe']."</td>";

        echo "<td>".$resultat['adressemail']."</td>";
        		
        echo "<td>".$resultat['adresse']."</td>";

        echo "<td><button>Editer</button></td>";
        echo "<td><button onclick='delete_user($cond)'>Supprimer</button></td>";
        echo "</tr>";
        
     } 

echo"</tbody>
</table>";
?>
