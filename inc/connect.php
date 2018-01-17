<?php
                try{
                    $db = new PDO("mysql:host=localhost;dbname=GestionCle", "root", "C@Musalber!");
                    $db->exec("SET NAMES utf8");
                }
                catch (Exception $e){
                    die($e->getMessage());
                }
                ?>
