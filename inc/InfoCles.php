<?php
include ("connect.php"); // Ajout de la page de connexion

if(isset($_REQUEST['cles'])) { // Recupération des différents menus
    $query = $db->prepare("SELECT Id_portes, Batiment, Etage, Serrure, Salle FROM Portes WHERE Id_Cles = ? "); // a supprimer si ne marche plus  ORDER BY Batiment, Etage
    $row = $query->execute(array($_REQUEST['cles'])); // Execution de la requete
    $query1 = $db->prepare("SELECT Nom FROM Cles WHERE Id_Cles = ?");
    $row1 = $query1->execute(array($_REQUEST['cles']));
    $reponce = "";
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
      $reponce = $reponce."
        <tr class='active'>
          <td>".$row['Batiment']."</td>
          <td>".$row['Etage']."</td>
          <td>".$row['Id_portes']."</td>
          <td>".$row['Serrure']."</td>
          <td>".$row['Salle']."</td>
        </tr>";
    }
    echo $reponce;
}
else {
    echo 'erreur'; // Retoure de l'erreur au cas ou il ne le trouve pas
}
/**/
?>
