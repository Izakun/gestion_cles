<?php
include ("connect.php"); // Ajout de la page de connexion

if(isset($_REQUEST['ids'])) // Recupération des différents menus
{
    $query = $db->prepare("SELECT Nom, Type, Quantité, Attribuer, Armoire, Emplacement FROM Cles WHERE Id_Cles IN (SELECT Id_Cles FROM Portes WHERE Id_portes = ?)");
    $query->execute(array($_REQUEST['ids'])); // Execution de la requete
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $query1 = $db->prepare("SELECT Serrure FROM Portes WHERE Id_portes = ?");
    $query1->execute(array($_REQUEST['ids']));
    $row1 = $query1->fetch(PDO::FETCH_ASSOC);
    $total = intval($row['Quantité'])-intval($row['Attribuer']);
    echo (" <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                <h4 class='modal-title'>Informations de la porte <strong>".$_REQUEST['ids']."</strong></h4>
            </div>
            <div class='modal-body'>
                Clé : <strong>".$row['Nom']."</strong></br>
                Serrure : <strong>".$row1['Serrure']."</strong></br>
                Armoire : <strong>".$row['Armoire']."</strong></br>
                Emplacement : <strong>".$row['Emplacement']."</strong></br>
                Disponible : <strong>".$total."</strong></p>
            </div>
                <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Fermer</button>
            </div>"); // Envois de la clé au js
}
else
{
    echo 'erreur'; // Retoure de l'erreur au cas ou il ne le trouve pas
}
?>
