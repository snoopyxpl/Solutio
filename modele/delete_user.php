<?php

include("connexion.php");

$id = intval($_GET['id']);

$sql = "DELETE FROM utilisateur WHERE iduser=$id";
$db->exec($sql);

