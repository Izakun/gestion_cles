<?php
include ("inc/header.php");
?>

<div id="navbar-main" class="navbar-collapse collapse" style="height: 1px;" aria-expanded="false">
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="inventaire.php">Inventaire</a>
        </li>
        <li>
            <a href="plans.php">Plans</a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Prêt<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="pretEntreprise.php">Entreprise</a></li>
                <li><a href="pretPersonnel.php">Personnel</a></li>
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
                <h1>Inventaire</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-3">
                <label class="control-label">Sélectionner le type de clé</label>
            </div>
            <div class="col-lg-7">
                <select id="cles" class="form-control cles">
                    <?php
                    include ("inc/connect.php");
                    $query = $db->prepare("SELECT Nom, Id_Cles FROM Cles"); // Requete en fonction des différents menus
                    $query->execute(); // Execution de la requete
                    $opt = '<option selected disabled>Sélectionner une clé</option>'; // Ajout du choix par défaut
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) { // Boucle pour parcourire le nombre de salles
                        $opt = $opt .'<option value="'.$row['Id_Cles'].'">'. $row['Nom'] .'</option>'; // Ajout du chois dans le menu pour chaque salles
                    }
                    echo $opt; // Envois des options au script js
                    ?>
                </select></br>
            </div>
            <div class="col-lg-2">
                <input class="btn btn-success btn-sm" name="b_print" type="button" onclick="printdiv('imprimer');" value=" Impression "/>
            </div>
        </div>
        <div class="col-lg-12" id='imprimer'>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Batiment</th>
                        <th>Etage</th>
                        <th>Porte</th>
                        <th>Serrure</th>
                        <th>Salle</th>
                    </tr>
                </thead>
                <tbody class="InfoCles" id="InfoCles">
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include ("footer.php");
?>
