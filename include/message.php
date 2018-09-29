<?php



$mess = $bdd->query('SELECT *
                    FROM messages
                    WHERE nom_produit = "'.$produits['nom_produit'].'"
                    
');

if(!$mess) {
    die("Erreur mysql : ".$bdd->errorInfo()[2]);
}

// Affichage commentaires
foreach ($mess->fetchAll() as $mess){?>

<div class="bulle">
    <p><?=$mess["message"]; ?></p>  
</div>
<?php } ?>