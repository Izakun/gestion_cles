<?php
include ("connect.php"); // Ajout de la page de connexion

if(isset($_REQUEST['salle'])) // Recupération des différents menus
{
    $query = $db->prepare("SELECT Nom, Attribuer, Armoire, Emplacement FROM Cles WHERE Id_Cles IN (SELECT Id_Cles FROM Portes WHERE Id_portes = ?)");
    $query->execute(array($_REQUEST['salle'])); // Execution de la requete
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $query1 = $db->prepare("SELECT Nom FROM Portes WHERE Id_portes = ?");
    $query1->execute(array($_REQUEST['salle'])); // Execution de la requete
    $row1 = $query1->fetch(PDO::FETCH_ASSOC);
    echo "<div class='alert alert-dismissible alert-info'>
    La clé a attribuée est : <strong>".$row['Nom']."</strong></br>
    Numérot de l'armoire : <strong>".$row['Armoire']."</strong></br>
    Emplacement : <strong>".$row['Emplacement']."</strong></br>
    Nom de la salle : <strong>".$row1['Nom']."</strong></br>
    </div>"; // Envois de la clé au js
}
else
{
    echo 'erreur'; // Retoure de l'erreur au cas ou il ne le trouve pas
}
?>
