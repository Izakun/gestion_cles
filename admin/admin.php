<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Gestion de clé</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="../index.php" class="navbar-brand">Gestion de clé</a>
                <button class="navbar-toggle collapsed" aria-expanded="false" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
<div class="navbar-collapse collapse" id="navbar-main">
    <ul class="nav navbar-nav">
        <li>
            <a href="../inventaire.php">Inventaire</a>
        </li>
        <li>
            <a href="../plans.php">Plans</a>
        </li>
        <li class="dropdown ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Prêt<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="../pretEntreprise.php">Entreprise</a></li>
                <li><a href="../pretPersonnel.php">Personnel</a></li>
            </ul>
        </li>
    </ul>
</div>
</div>
</div>
<div class="container">
    <div class="page-header"></br>
        <div class="row">
            <div class="col-lg-12">
                <h1>Panel Administrateur</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-body"><label>Importer des portes (.csv)</label></div>
                        <div class="panel-footer centered" style="text-align: center;">
                            <form action="csvPortes.php" method="POST" enctype="multipart/form-data">
                                <input style="width: 100%" name="csvPortes" id="csvPortes" type="file" class="btn btn-info centered" value="Parcourir" accept=".csv">
                                <a href="Portes.csv"><span class="label label-warning label-admin">Telecharger un exemple</span></a></br>
                                <input type="submit" class="btn btn-success" value="Valider">
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><label>Importer des clés (.csv)</label></div>
                        <div class="panel-footer centered" style="text-align: center;">
                            <form action="csvCles.php" method="POST" enctype="multipart/form-data">
                                <input style="width: 100%" name="csvCles" id="csvCles" type="file" class="btn btn-info centered" value="Parcourir" accept=".csv">
                                <a href="Cles.csv"><span class="label label-warning label-admin">Telecharger un exemple</span></a></br>
                                <input type="submit" class="btn btn-success" value="Valider" data-original-title="Tooltip on right">
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><label>Importer du personnel (.csv)</label></div>
                        <div class="panel-footer centered" style="text-align: center;">
                            <form action="csvPerso.php" method="POST" enctype="multipart/form-data">
                                <input style="width: 100%" name="csvPerso" id="csvPerso" type="file" class="btn btn-info centered" value="Parcourir" accept=".csv">
                                <a href="Pers.csv"><span class="label label-warning label-admin">Telecharger un exemple</span></a></br>
                                <input type="submit" class="btn btn-success" value="Valider">
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><label>Exporter la base de donnée</label></div>
                        <div class="panel-footer centered" style="text-align: center;">
                            <form action="SaveDb.php" method="POST" enctype="multipart/form-data">
                                <input type='submit' class='btn btn-success' value='Exporter'>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-body"><label>Ajouter un personnel</label></div>
                        <div class="panel-footer centered" style="text-align: center; height: 212px;">
                            <div class="form-group">
                                <form action="AddPerso.php" method="POST">
                                    <input style="width: 100%;" class="form-control" name="Nom" placeholder="NOM (en majuscule)"></br>
                                    <input style="width: 100%;" class="form-control" name="Prenom" placeholder="Prénom"></br>
                                    <input type='submit' class='btn btn-success' value='Ajouter'>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body"><label>Ajouter une clé</label></div>
                        <div class="panel-footer centered" style="text-align: center; height: 415px;">
                            <div class="form-group">
                                <form action="AddCle.php" method="POST">
                                    <input style="width: 100%;" class="form-control" name="NomCle" placeholder="Nom de la clé"></br>
                                    <select style="width: 100%;" class="form-control" name="Type">
                                        <option selected disabled>Type de clé</option>
                                        <option>Pass</option>
                                        <option>Unique</option>
                                    </select></br>
                                    <input style="width: 100%;" class="form-control" name="Quantite" placeholder="Nombre d'exemplaire"></br>
                                    <input style="width: 100%;" class="form-control" name="Armoire" placeholder="Armoire"></br>
                                    <input style="width: 100%;" class="form-control" name="Emplacement" placeholder="Emplacement"></br>
                                    <input type='submit' class='btn btn-success' value='Ajouter'>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-body"><label>Supprimer du personnel</label></div>
                        <div class="panel-footer centered" style="overflow: scroll; height: 705px;">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Personnel</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody class="cours">
                                    <?php
                                    include ("../inc/connect.php");
                                    $query = $db->prepare("SELECT * FROM Users ORDER BY Nom ASC"); // Requete en fonction des différents menus
                                    $query->execute(); // Execution de la requete
                                    $opt = ''; // Ajout du choix par défaut
                                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) { // Boucle pour parcourire le nombre de salles
                                        $opt = $opt ."
                                        <form action='SuppUser.php' method='POST'>
                                        <tr class='active'>
                                        <td>".$row['Nom']." ".$row['Prenom']."
                                        <input type='hidden' name='Nom' value=".$row['Nom'].">
                                        <input type='hidden' name='Prenom' value=".$row['Prenom']."></td>
                                        <td><input type='submit' class='btn btn-danger btn-xs' value='Supprimer'></td></form>"; // Ajout du chois dans le menu pour chaque salles
                                    }
                                    echo $opt; // Envois des options au script js
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include ("../footer.php");
?>
