<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Gestion de clé</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">Installation</a>
                <button class="navbar-toggle collapsed" aria-expanded="false" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['etape1'])){
        if (empty($_POST['hote_mysql']) || empty($_POST['login_mysql']) || empty($_POST['nom_mysql'])) echo "Veillez rensegnez les champs";
        else{
            $servername = $_POST['hote_mysql'];
            $username = $_POST['login_mysql'];
            $password = $_POST['mdp_mysql']; //C@Musalber!
            $dbname = $_POST['nom_mysql'];

            try {
                $db = new PDO("mysql:host=$servername", $username, $password);
                $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $sql = "DROP DATABASE IF EXISTS $dbname";
                $db->exec($sql);
                $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
                $db->exec($sql);
                $db = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
                $sql = file_get_contents('GestionCle.sql');
                $db->exec($sql);
                $data = '<?php
                try{
                    $db = new PDO("mysql:host='.$servername.';dbname='.$dbname.'", "'.$username.'", "'.$password.'");
                    $db->exec("SET NAMES utf8");
                }
                catch (Exception $e){
                    die($e->getMessage());
                }
                ?>';
                $fp = fopen("../inc/connect.php","w+");
                fwrite($fp, $data);
                fclose($fp);
                header('Location: ../admin/admin.php');
            }
            catch(PDOException $e)
            {
                echo " $e->getMessage()";
            }
        }
    }
    //DROP DATABASE IF EXISTS test
    ?>

    <div class="container" style="margin-top: 80px;">
    <form action="" method="post">
        <div class="span6">
            <div class="form-group">
                <label for="">Hôte MySQL</label>
                <input type="text" class="form-control" name="hote_mysql" placeholder="localhost">
            </div>
            <div class="form-group">
                <label for="">Utilisateur MySQL</label>
                <input type="text" class="form-control" name="login_mysql" placeholder="root">
            </div>
            <div class="form-group">
                <label for="">Mot de passe MySQL</label>
                <input type="password" class="form-control" name="mdp_mysql" placeholder="password">
            </div>
            <div class="form-group">
                <label for="">Nom de la base MySQL ("GestionCle" recommender)</label>
                <input type="text" class="form-control" name="nom_mysql" placeholder="GestionCle">
            </div>
            <input type="submit" name="etape1" class="btn btn-info" value="Valider">
        </div>
    </form>
</div>
    <body>
</html>
