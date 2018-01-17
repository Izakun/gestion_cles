<?php
include ("connect.php"); // Ajout de la page de connexion
date_default_timezone_set('UTC');
$nom_jour_fr = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
$mois_fr = Array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
list($nom_jour, $jour, $mois, $annee) = explode('/', date("w/d/n/Y"));
$date = $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee;

// ---------- DEBUT PRET PERSONNEL ---------- //

/*switch ($_REQUEST['cle1']) {
    case '1':
        $key1 = "Clé 6BD1";
        break;
    case '2':
        $key1 = "Clé BL";
        break;
    case '3':
        $key1 = "Clé B22722";
        break;
    case '4':
        $key1 = "Clé 32";
        break;
    case '5':
        $key1 = "Clé U08045";
        break;
    case '6':
        $key1 = "Clé U53517";
        break;
    case '7':
        $key1 = "Clé TESA";
        break;
}switch ($_REQUEST['cle2']) {
    case '1':
        $key2 = "Clé 6BD1";
        break;
    case '2':
        $key2 = "Clé BL";
        break;
    case '3':
        $key2 = "Clé B22722";
        break;
    case '4':
        $key2 = "Clé 32";
        break;
    case '5':
        $key2 = "Clé U08045";
        break;
    case '6':
        $key2 = "Clé U53517";
        break;
    case '7':
        $key2 = "Clé TESA";
        break;
}switch ($_REQUEST['cle3']) {
    case '1':
        $key3 = "Clé 6BD1";
        break;
    case '2':
        $key3 = "Clé BL";
        break;
    case '3':
        $key3 = "Clé B22722";
        break;
    case '4':
        $key3 = "Clé 32";
        break;
    case '5':
        $key3 = "Clé U08045";
        break;
    case '6':
        $key3 = "Clé U53517";
        break;
    case '7':
        $key3 = "Clé TESA";
        break;
}
$keys = [
1 => "Clé Labo - 6BD1",
"Clé BL",
"Clé B22722",
"Clé 32",
"Clé U08045",
"Clé U53517",
"Clé TESA",
"Clé B002 - Armoire grise métal",
"Clé B003 - Armoire noire - Théatre",
"Clé B004 - Armoire Métallique",
"Clé B012 - Armoire",
"Clé B104 - Armoire",
"Clé B105 - Armoire",
"Clé B116 - Armoire",
"Clé B201 - Armoire bois",
"Clé B204 - Armoire",
];
$key1 = $keys["{$_REQUEST['cle1']}"];
$key2 = $keys["{$_REQUEST['cle2']}"];
$key3 = $keys["{$_REQUEST['cle3']}"];*/

$opt = "";
$test = $_REQUEST['cle3'];
if (isset($_REQUEST['nom']) && isset($_REQUEST['cle1'])) {
    if (isset($_REQUEST['cle2']) && !empty($_REQUEST['cle2'])) {
        if (isset($_REQUEST['cle3']) && !empty($_REQUEST['cle3'])) {
            $query3 = $db->prepare("SELECT Quantité, Attribuer, Nom FROM Cles WHERE Id_Cles = ?");
            $query3->execute(array($_REQUEST['cle3']));
            $row3 = $query3->fetch(PDO::FETCH_ASSOC);
            $cle3 = $row3['Nom'];
            if (intval($row3['Quantité']) <= intval($row3['Attribuer'])) {
                $opt = $opt . ("<div class='alert alert-dismissible alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'><button>&times;</button></a>
                <strong>La clé '".$key3."' n'est plus disponible. </strong>
                </div>");
            }
            elseif (intval($row3['Quantité']) > intval($row3['Attribuer'])) {
                $query3 = $db->prepare("INSERT INTO PretPersonnel VALUES (NULL, ?, ?, NOW(), NULL)");
                $query3->execute(array($_REQUEST['nom'], $cle3));
                $query3 = $db->prepare('UPDATE Cles SET Attribuer = Attribuer + 1 WHERE Id_Cles = ?');
                $query3->execute(array($_REQUEST['cle3'])); // Execution de la requete
                $cle3 = " / ".$cle3;
                $opt = $opt . ("<div class='alert alert-dismissible alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'><button>&times;</button></a>
                <strong>La clée a bien été atribué.
                </div>");
            }
        }
        $query2 = $db->prepare("SELECT Quantité, Attribuer, Nom FROM Cles WHERE Id_Cles = ?");
        $query2->execute(array($_REQUEST['cle2']));
        $row2 = $query2->fetch(PDO::FETCH_ASSOC);
        $cle2 = $row2['Nom'];
        if (intval($row2['Quantité']) <= intval($row2['Attribuer'])) {
            $opt = $opt . ("<div class='alert alert-dismissible alert-danger'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'><button>&times;</button></a>
            <strong>La clé '".$key2."' n'est plus disponible. </strong>
            </div>");
        }
        elseif (intval($row2['Quantité']) > intval($row2['Attribuer'])) {
            $query2 = $db->prepare("INSERT INTO PretPersonnel VALUES (NULL, ?, ?, NOW(), NULL)");
            $query2->execute(array($_REQUEST['nom'], $cle2));
            $query2 = $db->prepare('UPDATE Cles SET Attribuer = Attribuer + 1 WHERE Id_Cles = ?');
            $query2->execute(array($_REQUEST['cle2'])); // Execution de la requete
            $cle2 = " / ".$cle2;
            $opt = $opt . ("<div class='alert alert-dismissible alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'><button>&times;</button></a>
            <strong>La clée a bien été atribué.
            </div>");
        }
    }
    $query = $db->prepare("SELECT Quantité, Attribuer, Nom FROM Cles WHERE Id_Cles = ?");
    $query->execute(array($_REQUEST['cle1']));
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $cle1 = $row['Nom'];
    if (intval($row['Quantité']) <= intval($row['Attribuer'])) {
        $opt = $opt . ("<div class='alert alert-dismissible alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'><button>&times;</button></a>
        <strong>La clé '".$cle1."' n'est plus disponible. </strong>
        </div>");
    }
    elseif (intval($row['Quantité']) > intval($row['Attribuer'])) {
        $query = $db->prepare("INSERT INTO PretPersonnel VALUES (NULL, ?, ?, NOW(), NULL)");
        $query->execute(array($_REQUEST['nom'], $cle1));
        $id = $db->lastInsertId();
        $query = $db->prepare("SELECT Donner FROM PretPersonnel WHERE Id = ?");
        $query->execute(array($id));
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $a_imprimer = ('<div class="imprimer hide" id="imprimer">
        <div class="container-fluid">
        <img class="rpdll" src="img/rpdll.png"></br>
        <h1 style="text-align: center;">Prêt de clé</h1></br></br>
        <div class="contaner">
        <label class="control-label">Personnel : </label>'.$_REQUEST['nom'].'</br>
        </div></br>
        </div>
        <div class="container-fluid">
        <div class="contaner">
        <label class="control-label">Clé : </label>'.$cle1.$cle2.$cle3.'</br>
        </div></br>
        </div>
        <div class="container-fluid">
        <div class="contaner">
        <label class="control-label">Date : </label>'.$date.'</br>
        </div></br>
        <div class="contaner"></div>
        <div class="contaner">
        <label class="control-label">Signature</label>
        <div class="panel-footer">&nbsp;</br>&nbsp;</br>&nbsp;</br>&nbsp;</br>&nbsp;</br></div>
        </div></br>
        </div>
        <hr>
        <div class="container-fluid">
        <img class="rpdll" src="img/rpdll.png"></br>
        <h1 style="text-align: center;">Prêt de clé</h1></br></br>
        <div class="contaner">
        <label class="control-label">Personnel : </label>'.$_REQUEST['nom'].'</br>
        </div></br>
        </div>
        <div class="container-fluid">
        <div class="contaner">
        <label class="control-label">Clé : </label>'.$cle1.$cle2.$cle3.'</br>
        </div></br>
        </div>
        <div class="container-fluid">
        <div class="contaner">
        <label class="control-label">Date : </label>'.$date.'</br>
        </div></br>
        <div class="contaner"></div>
        <div class="contaner">
        <label class="control-label">Signature</label>
        <div class="panel-footer">&nbsp;</br>&nbsp;</br>&nbsp;</br></div>
        </div>
        </div>
        </div>
        <script type="text/javascript" src="js/BtnRendrePers.js"></script>');
        $opt = $opt . ("<div class='alert alert-dismissible alert-success'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'><button>&times;</button></a>
        <strong>La clée a bien été atribué.</strong></div>");
        $opt = $a_imprimer . $opt ."<p class='text-center'><input class='btn btn-warning btn-xs' name='b_print' type='button' onclick=\"printdiv('imprimer');\" value=' Imprimer le reçu '/></p>";
        $query = $db->prepare('UPDATE Cles SET Attribuer = Attribuer + 1 WHERE Id_Cles = ?');
        $query->execute(array($_REQUEST['cle1'])); // Execution de la requete
    }

    echo $opt;
}

// ------------ FIN PRET PERSONNEL ----------- //

// ---------- DEBUT PRET ENTREPRISE ---------- //

elseif(isset($_REQUEST['nom']) && isset($_REQUEST['prenom']) && isset($_REQUEST['entreprise']) && isset($_REQUEST['batiment']) && isset($_REQUEST['etage']) && isset($_REQUEST['salle'])){ // Recupération des différents menus
    $query = $db->prepare('SELECT `Id_Cles` FROM `Portes` WHERE `Id_portes` = ?');
    $query->execute(array($_REQUEST['salle']));
    $row1 = $query->fetch(PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT Quantité, Attribuer, Nom FROM Cles WHERE Id_Cles = ?");
    $query->execute(array($row1['Id_Cles'])); // Execution de la requete
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $cle = $row['Nom'];
    if (intval($row['Quantité']) <= intval($row['Attribuer'])) {
        echo "<div class='alert alert-dismissible alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'><button>&times;</button></a>
        <strong>Auccune clées en stocke disponible.</strong>
        </div>";
    }
    elseif (intval($row['Quantité']) > intval($row['Attribuer'])){
        $query = $db->prepare("INSERT INTO PretEntreprise VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, NOW(), NULL)"); // Requete en fonction des différents menus
        $query->execute(array($_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['entreprise'],$_REQUEST['batiment'], $_REQUEST['etage'],$_REQUEST['salle'], $row1['Id_Cles'])); // Execution de la requete
        $id = $db->lastInsertId();
        $query = $db->prepare("SELECT Donner FROM PretEntreprise WHERE Id = ?");
        $query->execute(array($id));
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $a_imprimer = ('<div class="imprimer hide" id="imprimer">
        <div class="container-fluid">
        <img class="rpdll" src="img/rpdll.png"></br>
        <div style="text-align: center;"><h1>Prêt de clé personnel exterieur</h1></div></br>
        <div class="contaner">
        <label class="control-label">Nom : </label>'.$_REQUEST['nom'].'</br>
        </div></br>
        <div class="contaner"></div>
        <div class="contaner">
        <label class="control-label">Prenom : </label>'.$_REQUEST['prenom'].'</br>
        </div></br>
        </div>
        <div class="container-fluid">
        <div class="contaner">
        <label class="control-label">Entreprise : </label>'.$_REQUEST['entreprise'].'</br>
        </div></br>
        </div>
        <div class="container-fluid">
        <div class="contaner">
        <label class="control-label">Clé : </label>'.$cle.'</br>
        </div></br>
        </div>
        <div class="container-fluid">
        <div class="contaner">
        <label class="control-label">Date : </label>'.$date.'</br>
        </div></br>
        <div class="contaner"></div>
        <div class="contaner">
        <label class="control-label">Signature</label>
        <div class="panel-footer">&nbsp;</br>&nbsp;</br></div>
        </div>
        </div>
        <hr>
        <div class="container-fluid">
        <img class="rpdll" src="img/rpdll.png"></br>
        <div style="text-align: center;"><h1>Prêt de clé personnel exterieur</h1></div></br></br>
        <div class="contaner">
        <label class="control-label">Nom : </label>'.$_REQUEST['nom'].'</br>
        </div></br>
        <div class="contaner"></div>
        <div class="contaner">
        <label class="control-label">Prenom : </label>'.$_REQUEST['prenom'].'</br>
        </div></br>
        </div>
        <div class="container-fluid">
        <div class="contaner">
        <label class="control-label">Entreprise : </label>'.$_REQUEST['entreprise'].'</br>
        </div></br>
        </div>
        <div class="container-fluid">
        <div class="contaner">
        <label class="control-label">Clé : </label>'.$cle.'</br>
        </div></br>
        </div>
        <div class="container-fluid">
        <div class="contaner">
        <label class="control-label">Date : </label>'.$date.'</br>
        </div></br>
        <div class="contaner"></div>
        <div class="contaner">
        <label class="control-label">Signature</label>
        <div class="panel-footer">&nbsp;</br>&nbsp;</br></div>
        </div>
        </div>
        </div>');
        echo ($a_imprimer . "<div class='alert alert-dismissible alert-success'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'><button>&times;</button></a>
        <strong>La clé a bien été atribué à l'intervenant.</strong>
        <input class='btn btn-warning btn-xs' name='b_print' type='button' onclick=\"printdiv('imprimer');\" value=' Impression '/>
        </div>");
        $query = $db->prepare('UPDATE Cles SET Attribuer = Attribuer + 1 WHERE Id_Cles = ?');
        $query->execute(array($row1['Id_Cles'])); // Execution de la requete

    }
}

// ---------- FIN PRET ENTREPRISE ---------- //

?>
