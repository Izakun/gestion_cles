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
        <div style="text-align: center;"><img class="logo" src="img/logo.png"></div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <h1 id="buttons" class="text-center">Inventaire</h1>
                <p class="text-center">Permet de lister les salles que chaques clés ouvrent avec la possibilité d'imprimer cette liste</br></br><a href="inventaire.php" class="btn btn-primary btn-lg">Acceder</a></p>
            </div>
            <div class="col-lg-4">
                <h1 id="buttons" class="text-center">Plans</h1>
                <p class="text-center">Affiche les plans du lycée avec possibilité de cliquer sur les portes pour avoir les informations</br></br><a href="plans.php" class="btn btn-primary btn-lg">Acceder</a></p>
            </div>

            <div class="col-lg-2"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1 id="buttons" class="text-center">Prêts</h1>
                <p class="text-center">Attribuer des clés aux intervenants extérieur ainsi qu'aux personnels du lycée</br></br><a href="pretEntreprise.php" class="btn btn-primary btn-lg">Acceder Entreprise</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="pretPersonnel.php" class="btn btn-primary btn-lg">Acceder Personnel</a></p>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>
<?php
include ("footer.php");
?>
