<?php
include ("inc/header.php");
?>
<div class="navbar-collapse collapse" id="navbar-main">
    <ul class="nav navbar-nav">
        <li>
            <a href="inventaire.php">Inventaire</a>
        </li>
        <li>
            <a href="plans.php">Plans</a>
        </li>
        <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Prêt<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="pretEntreprise.php">Entreprise</a></li>
                <li><a href="">Personnel</a></li>
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
                <h1>Prêt Personnel</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal">
                <div  id="popup" name="popup"></div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Personnel</label>
                    <div class="col-lg-4">
                        <select id="personnel" class="form-control cles">
                            <?php
                            include ("inc/connect.php");
                            $query = $db->prepare("SELECT * FROM Users ORDER BY Nom ASC"); // Requete en fonction des différents menus
                            $query->execute(); // Execution de la requete
                            $opt = '<option selected disabled>Selectionner un personnel</option>'; // Ajout du choix par défaut
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) { // Boucle pour parcourire le nombre de salles
                                $opt = $opt .'<option value="'.$row['Nom'].' '.$row['Prenom'].'">'.$row['Nom'].' '.$row['Prenom'].'</option>'; // Ajout du chois dans le menu pour chaque salles
                            }
                            echo $opt; // Envois des options au script js
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-2 control-label">Clé 1</label>
                    <div class="col-lg-4">
                        <select id="cle1" class="form-control cles">
                            <?php
                            $query = $db->prepare("SELECT Nom, Id_Cles FROM Cles"); // Requete en fonction des différents menus
                            $query->execute(); // Execution de la requete
                            $opt = '<option selected disabled>Selectionner une clé</option>'; // Ajout du choix par défaut
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) { // Boucle pour parcourire le nombre de salles
                                $opt = $opt .'<option value="'.$row['Id_Cles'].'">'. $row['Nom'] .'</option>'; // Ajout du chois dans le menu pour chaque salles
                            }
                            echo $opt; // Envois des options au script js
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Clé 2</label>
                    <div class="col-lg-4">
                        <select id="cle2" class="form-control cles">
                            <?php
                            $query = $db->prepare("SELECT Nom, Id_Cles FROM Cles"); // Requete en fonction des différents menus
                            $query->execute(); // Execution de la requete
                            $opt = '<option selected disabled>Selectionner une clé</option>'; // Ajout du choix par défaut
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) { // Boucle pour parcourire le nombre de salles
                                $opt = $opt .'<option value="'.$row['Id_Cles'].'">'. $row['Nom'] .'</option>'; // Ajout du chois dans le menu pour chaque salles
                            }
                            echo $opt; // Envois des options au script js
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Clé 3</label>
                    <div class="col-lg-4">
                        <select id="cle3" class="form-control cles">
                            <?php
                            $query = $db->prepare("SELECT Nom, Id_Cles FROM Cles"); // Requete en fonction des différents menus
                            $query->execute(); // Execution de la requete
                            $opt = '<option selected disabled>Selectionner une clé</option>'; // Ajout du choix par défaut
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) { // Boucle pour parcourire le nombre de salles
                                $opt = $opt .'<option value="'.$row['Id_Cles'].'">'. $row['Nom'] .'</option>'; // Ajout du chois dans le menu pour chaque salles
                            }
                            echo $opt; // Envois des options au script js
                            ?>
                        </select>
                    </div>
                </div>
                <div id="AffCle" name="AffCle"></div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Vider les champs</button>
                        <button type="reset" id="submit" name="submit" class="btn btn-success submit">Attribuer</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#cours">Prêts en cours</a></li>
                <li><a data-toggle="tab" href="#historique">Historique des prêts</a></li>
            </ul>
            <div class="tab-content">
                <div id="cours" class="tab-pane fade in active">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Personnel</th>
                                <th>Clé</th>
                                <th>Donnée le :</th>
                                <th>Rendue le :</th>
                            </tr>
                        </thead>
                        <tbody class="cours">
                            <?php
                            include ("inc/connect.php");
                            $query = $db->prepare("SELECT * FROM PretPersonnel WHERE Rendu IS NULL ORDER BY Personnel ASC");
                            $query->execute(); // Execution de la requete
                            $reponce = "";
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                $test="<button class='btn btn-xs btn-danger rendre' id='".$row['ID']."'>Rendre</button>";
                                $reponce = $reponce."
                                <tr class='active'>
                                <td>".$row['Personnel']."</td>
                                <td>".$row['Clé']."</td>
                                <td>".$row['Donner']."</td>
                                <td id='modifier".$row['ID']."'>".$test."</td>
                                </tr>";
                            }
                            echo ($reponce);
                            ?>
                            <script type="text/javascript" src="js/BtnRendrePers.js"></script>
                        </tbody>
                    </table>
                </div>
                <div id="historique" class="tab-pane fade">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Personnel</th>
                                <th>Clé</th>
                                <th>Donnée le :</th>
                                <th>Rendue le :</th>
                            </tr>
                        </thead>
                        <tbody class="historique">
                            <?php
                            include ("inc/connect.php");
                            $query = $db->prepare("SELECT * FROM PretPersonnel WHERE Rendu IS NOT NULL ORDER BY Personnel DESC");
                            $query->execute(); // Execution de la requete
                            $reponce = "";
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                $reponce = $reponce."
                                <tr class='active'>
                                <td>".$row['Personnel']."</td>
                                <td>".$row['Clé']."</td>
                                <td>".$row['Donner']."</td>
                                <td>".$row['Rendu']."</td>
                                </tr>";
                            }
                            echo ($reponce);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include ("footer.php");
?>
