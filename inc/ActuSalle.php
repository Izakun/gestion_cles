<?php
include ("connect.php"); // Ajout de la page de connexion

if(isset($_POST['batiment']) && isset($_POST['etage'])) // Recupération des différents menus
{
    $query = $db->prepare("SELECT Id_portes FROM Portes WHERE Batiment = ? AND Etage = ?"); // Requete en fonction des différents menus
    $query->execute(array($_POST['batiment'], $_POST['etage'])); // Execution de la requete
    $opt = '<option selected disabled>Selectionner une salle</option>'; // Ajout du choix par défaut
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) { // Boucle pour parcourire le nombre de salles
        $opt = $opt .'<option>'. $row['Id_portes'] .'</option>'; // Ajout du chois dans le menu pour chaque salles
    }
    echo $opt; // Envois des options au script js
}
else
{
    echo 'erreur'; // Retoure de l'erreur au cas ou il ne le trouve pas
}
?>
