<?php
include ("../inc/connect.php");
$query = $db->prepare("DELETE FROM Users WHERE Nom = ? AND Prenom = ?"); // Requete en fonction des différents menus
$query->execute(array($_REQUEST['Nom'], $_REQUEST['Prenom'])); // Execution de la requete
header('Location: ./admin.php');
?>
