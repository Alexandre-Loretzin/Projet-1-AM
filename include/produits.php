<?php

// Connexion à la base de données

include "conexion.php";

// Récupération des produits
 $produits = $bdd->query('SELECT p.*, v.*
                         FROM produits p
                         LEFT JOIN votes v ON v.nom_produit = p.nom_produit                         
                         ORDER BY vote DESC');


 //test erreur
if(!$produits) {
    die("Erreur mysql : ".$bdd->errorInfo()[2]);
}


//affichage des produits
foreach ($produits->fetchAll() as $produits){ ?>
<div class="produit-container  row">
    <!-- image -->
    <div class="foreach-produit image-produit col-3 col-md-2 m-auto">
        <img class="imagess img-fluid" src="<?php echo $produits['image_produit'];?>">
    </div>
    <!-- Nom produit -->
    <div class="foreach-produit texte-produit col-5 col-md-6 m-auto" data-toggle="modal" data-target="#modal<?=$produits['id']?>" >
        <h2 class="titre-produit"> <?php echo htmlspecialchars($produits['nom_produit']); ?> </h2>        
    </div>
    <!-- label catégorie -->
    <div class="foreach-produit col-2 categorie-produit m-auto" >
    <span class="label-produit"> <?php echo htmlspecialchars($produits['categorie_produit']); ?></span>
    </div>
    
    <div class="foreach-produit upvote-produit col-3 col-md-2 m-auto" >
        <!-- bouton upvote -->
        <form action="app/vote.php" method="post" onsubmit="storeUpvote(event, this)">
            <input type="hidden" name="upvote" value="<?=$produits['nom_produit']?>">
            <button type="submit"  class="fas fa-angle-double-up"></button>
        </form>
        <div class="foreach-produit m-auto " ><?php echo "<strong class='count' style='color : green'>".$produits['vote']."</strong>" ?></div>
    </div>
    <!-- modal produit -->


    <!--Modal: modalRelatedContent-->
    <div class="modal fade right" id="modal<?=$produits['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    data-backdrop="false">
        <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading"></p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">

                    <div class="row">
                        <div class="col-xs-12 col-md-5">
                            <img src="<?php echo $produits['image_produit'];?>" class="img-fluid" alt="">
                        </div>

                    <div class="col-xs-12 col-md-7">
                        <p><strong><?php echo htmlspecialchars($produits['nom_produit']); ?></strong></p>
                        
                        <p class="modal-text"><?=$produits['description_produit']?></p>
                    </div>
                </div>
                <form action="app/commentaire.php" method="post"onsubmit="storeComm(event, this)">
                    <input type="hidden" name="nom_produit" value="<?=$produits['nom_produit']?>">
                    <input type="text" name="commentaire" id="casecom" required placeholder="Entrer votre message">
                    <button type="submit" name="bouton-com" class="btn btn mb-2"><i class="far fa-comment-dots fa-2x" type="submit"></button></i>
                </form>
                <div>
                <?php include "message.php";?>
                </div>           
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalRelatedContent-->


</div>


<?php } ?>
