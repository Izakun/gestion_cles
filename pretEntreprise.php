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
                <li><a href="">Entreprise</a></li>
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
             <h1>Pret Entreprise</h1>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-lg-12">
           <form class="form-horizontal">
            <div  id="popup" name="popup"></div>
            <div class="form-group">
              <label class="col-lg-1 control-label">Nom</label>
              <div class="col-lg-11">
                <input class="form-control" id="nom" name="nom" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-1 control-label">Prénom</label>
              <div class="col-lg-11">
                <input class="form-control" id="prenom" name="prenom" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-1 control-label">Entreprise</label>
              <div class="col-lg-11">
                <input class="form-control" id="entreprise" name="entreprise" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-1 control-label">Batiment</label>
              <div class="col-lg-3">
                <select id="batiment" name="batiment" class="form-control" onchange="bat()">
                  <option selected disabled>Sélectionner un bâtiment</option>
                  <option value="Bat A">Bâtiment A</option>
                  <option value="Bat B">Bâtiment B</option>
                  <option value="Bat C">Bâtiment C</option>
                  <option value="Bat D">Bâtiment D</option>
                  <option value="Bat E">Bâtiment E</option>
                  <!--<option value="Bat F">Bâtiment F</option>-->
                  <option value="Bat G">Bâtiment G</option>
                </select>
              </div>
              <label class="col-lg-1 control-label">Etage</label>
              <div class="col-lg-3 etage">
                <select id="etage" name="etage" class="form-control" onchange="">
                  <option selected disabled>Sélectionner un bâtiment</option>
                </select>
              </div>
              <label class="col-lg-1 control-label">Porte</label>
              <div class="col-lg-3">
                <select id="salle" name="salle" class="form-control porte">
                  <option selected disabled>Sélectionner un étage</option>
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
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Entreprise</th>
                     <th>Bâtiment</th>
                     <th>Etage</th>
                     <th>Salle</th>
                     <th>Donnée le :</th>
                     <th>Rendue le :</th>
                   </tr>
                 </thead>
                 <tbody class="cours">
                   <?php
                   include ("inc/connect.php");
                   $query = $db->prepare("SELECT * FROM PretEntreprise WHERE Rendu IS NULL ORDER BY Nom ASC");
                   $query->execute(); // Execution de la requete
                   $reponce = "";
                   while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                     $test="<button class='btn btn-xs btn-danger rendre' id='".$row['ID']."'>Rendre</button>";
                     $reponce = $reponce."
                     <tr class='active'>
                     <td>".$row['Nom']."</td>
                     <td>".$row['Prenom']."</td>
                     <td>".$row['Entreprise']."</td>
                     <td>".$row['Batiment']."</td>
                     <td>".$row['Etage']."</td>
                     <td>".$row['Salle']."</td>
                     <td>".$row['Donner']."</td>
                     <td id='modifier".$row['ID']."'>".$test."</td>
                     </tr>";
                   }
                   echo ($reponce);
                   ?>
                   <script type="text/javascript" src="js/BtnRendreEnt.js"></script>
                 </tbody>
               </table>
             </div>
             <div id="historique" class="tab-pane fade">
               <table class="table table-striped table-hover">
                 <thead>
                   <tr>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Entreprise</th>
                     <th>Bâtiment</th>
                     <th>Etage</th>
                     <th>Salle</th>
                     <th>Donnée le :</th>
                     <th>Rendue le :</th>
                   </tr>
                 </thead>
                 <tbody class="historique">
                   <?php
                   include ("inc/connect.php");
                   $query = $db->prepare("SELECT * FROM PretEntreprise WHERE Rendu IS NOT NULL ORDER BY Nom ASC");
                   $query->execute(); // Execution de la requete
                   $reponce = "";
                   while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                     $reponce = $reponce."
                     <tr class='active'>
                       <td>".$row['Nom']."</td>
                       <td>".$row['Prenom']."</td>
                       <td>".$row['Entreprise']."</td>
                       <td>".$row['Batiment']."</td>
                       <td>".$row['Etage']."</td>
                       <td>".$row['Salle']."</td>
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
