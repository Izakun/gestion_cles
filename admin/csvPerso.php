<?php
include("../inc/connect.php");
$file = fopen($_FILES['csvPerso']['tmp_name'], 'r');
$a=1;
while (($line = fgetcsv($file, 0, "," , '"')) !== FALSE) { //ici une virgule
    $array[] = $line;
}

foreach($array as $entree){
    $query = $db->prepare("SELECT * FROM Users WHERE nom = ? AND prenom = ?");
    $query->execute(array($entree[0], $entree[1])); //Correction ici
    if($result = $query->fetch()){
        echo ($a++." error</br>");
    }
    else {
        $query = $db->prepare("INSERT INTO Users VALUES (?, ?)");
        $query->execute(array($entree[0], $entree[1]));
    }
}
fclose($file);
header('Location: admin.php');
?>
