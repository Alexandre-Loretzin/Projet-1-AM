<?php
include "../include/conexion.php";

$addproduit = $bdd->prepare('   INSERT INTO produits (nom_produit, categorie_produit, description_produit, image_produit) 
                                VALUE (?, ?, ?, ?)
                            ');
$addproduit->execute(array($_POST['nom'],$_POST['categorie'],$_POST['description'],$_POST['url']));

$addvote = $bdd->prepare('  INSERT INTO votes (nom_produit, vote) 
                            VALUE (?, 0)
                        ');
$addvote->execute(array($_POST['nom']));

//  //test erreur
//  if(!$addproduit) {
//     die("Erreur mysql : ".$bdd->errorInfo()[2]);
// }

//  //test erreur
//  if(!$addvote) {
//     die("Erreur mysql : ".$bdd->errorInfo()[2]);
// }


