<?php
include ("../inc/connect.php");

$Nom = $_REQUEST['NomCle'];
$Type = $_REQUEST['Type'];
$Quantite = $_REQUEST['Quantite'];
$Armoire = $_REQUEST['Armoire'];
$Emplacement = $_REQUEST['Emplacement'];

if (empty($_REQUEST['Type']))
    $Type = "";
if (empty($_REQUEST['Quantite']))
    $Quantite = 0;
if (empty($_REQUEST['Armoire']))
    $Armoire = "";
if (empty($_REQUEST['Emplacement']))
    $Emplacement = "";


$query = $db->prepare("INSERT INTO Cles VALUES (NULL, ?, ?, ?, 0, ?, ?)"); // Requete en fonction des différents menus
$query->execute(array($Nom, $Type, $Quantite, $Armoire, $Emplacement)); // Execution de la requete
header('Location: ./admin.php');
?>
