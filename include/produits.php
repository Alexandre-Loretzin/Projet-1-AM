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
<div class="produit-container row">
    <div class="image-produit col-2">
        <img src="<?php echo $produits['image_produit'];?>">
    </div>
    <div class="texte-produit col-8 ">
        <div class="row">
            <h2> <?php echo htmlspecialchars($produits['nom_produit']); ?> </h2>
            <span class="label label-default"> <?php echo htmlspecialchars($produits['categorie_produit']); ?></span>
        </div>
    </div>
    <div class="col-2" >

    </div>
</div>
<?php } ?>

