<?php
include ("../inc/connect.php");
$query = $db->prepare("INSERT INTO Users VALUES (?, ?)"); // Requete en fonction des différents menus
$query->execute(array($_REQUEST['Nom'], $_REQUEST['Prenom'])); // Execution de la requete
header('Location: ./admin.php');
?>
