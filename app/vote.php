<?php
include '../include/conexion.php';

$upvote = $bdd->query(' UPDATE votes 
                        SET vote = vote + 1 
                        WHERE nom_produit = "'.$_POST['upvote'].'"' );
 
 if(!$upvote) {
    die("Erreur mysql : ".$bdd->errorInfo()[2]);
}

