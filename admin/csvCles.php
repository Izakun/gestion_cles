<?php
include("../inc/connect.php");
$file = fopen($_FILES['csvCles']['tmp_name'], 'r');
$a=1;
while (($line = fgetcsv($file, 0, "," , '"')) !== FALSE) { //ici une virgule
    $array[] = $line;
}

foreach($array as $entree){
    $query = $db->prepare("SELECT * FROM Cles WHERE Nom = ?");
    $query->execute(array($entree[1])); //Correction ici
    if($result = $query->fetch()){
        echo ($a++." error</br>");
    }
    else {
        $query = $db->prepare("INSERT INTO Cles VALUES (? ,?, ?, ?, ?, ?, ?)");
        $query->execute(array($entree[0], $entree[1], $entree[2], $entree[3], $entree[4], $entree[5], $entree[6]));
    }
}
fclose($file);
header('Location: admin.php');
?>
