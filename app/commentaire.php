<?php 
include "../include/conexion.php";

// Enregistre messages dans bdd
$com=$bdd->prepare('INSERT INTO messages (message, nom_produit) 
                    VALUES(?,?)');
$com->execute(array($_POST['commentaire'], $_POST['nom_produit']));