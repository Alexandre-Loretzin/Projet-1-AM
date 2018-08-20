<?php

// Connexion à la base de données

include "conexion.php";

// Récupération des produits
 $produits = $bdd->query('SELECT p.*
                         FROM produits p                         
                         ORDER BY ID ');


 //test erreur
if(!$produits) {
    die("Erreur mysql : ".$bdd->errorInfo()[2]);
}


//affichage des produits
foreach ($produits->fetchAll() as $produits){ ?>
<div>
     <?php echo $produits['image_produit']; ?>

    <h2> <?php echo htmlspecialchars($produits['nom_produit']); ?> </h2>
    <h4> <?php echo htmlspecialchars($produits['categorie_produit']); ?></h4>
    <p> <?php echo $produits['description_produit']; ?> </p>
</div>
<?php } ?>

