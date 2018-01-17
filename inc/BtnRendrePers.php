<?php
include ("connect.php"); // Ajout de la page de connexion
if(isset($_REQUEST['userid'])) // Recupération des différents menus
{
    $query = $db->prepare("UPDATE PretPersonnel SET Rendu = NOW() WHERE ID = ?"); // Requete en fonction des différents menus
    $query->execute(array($_REQUEST['userid'])); // Execution de la requete
    $query = $db->prepare("SELECT Rendu, Clé FROM PretPersonnel WHERE ID = ?");
    $query->execute(array($_REQUEST['userid']));
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $query = $db->prepare("UPDATE Cles SET Attribuer = Attribuer - 1 WHERE Nom = ?");
    $query->execute(array($row['Clé']));
    echo $row['Rendu']; // Envois des options au script js
}
else
{
    echo 'erreur'; // Retoure de l'erreur au cas ou il ne le trouve pas
}
?>
