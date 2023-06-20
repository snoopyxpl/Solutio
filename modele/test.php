<?php
include("connexion.php");
$query = $db->prepare("SELECT * FROM utilisateur WHERE 'pseudo' = 'Fan'");
$query->execute();
$liste = $query->fetchAll();

foreach ($liste as $resultat){
    echo $resultat['pseudo'] ;
    echo "un";
}
echo "un";