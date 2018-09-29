<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Projet 1 </title>
  </head>
  <body>

<!-- Début navbar --> 
  <nav class="navbar navbar-purple row">
    <div class="container-fluid row">
    <!-- Bouton maison -->
    <a href="index.php"><i class="fas fa-home "></i></a>           
    <!-- fin bouton -->
    <!-- Bouton catégories -->
   
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Catégories
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Bidon </a>
        <a class="dropdown-item" href="#">Machin</a>
        <a class="dropdown-item" href="#">Dudul</a>
      </div>
    </div>
    <!-- Fin bouton catégories -->

    <!-- Bouton ajouter un produit -->
    <div class="ajout">
    <button class="btn btn-secondary " type="button" href="projets.simplon-roanne.com/Projet-1-AM/index.php" id="ahref" data-toggle="modal" data-target="#modalRelatedContent"><h5>Produits <i class="fas fa-plus"></i></h5></button>
    </div>
    <!-- Fin bouton produit -->
    <!-- recherche -->
    <form class="form-inline">
      <input class="form-control mr-sm-3 nav-search" id="search" type="search" placeholder="Recherche" aria-label="Search">
    <!-- Bouton loupe -->
      <button class="btn btn-outline-info my-4 my-sm-2" id="loupe" type="submit"><i class="fas fa-search" type="submit"></button></i>
    <!-- Fin bouton loupe -->

    </form>
    </div>
    </div>
  </nav>
  <!-- Fin navbar -->


<!-- Début modal -->
  <div class="modal fade" id="modalRelatedContent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
      <!--Content-->
        <div class="modal-content">
          <!--Header-->
              <div class="modal-header">
                <h4>Ajouter un produit</h4>
                <!-- Boutton close -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                </button>
              </div>
          <!--Body-->
              <!-- Debut formulaire modal -->
              <div class="modal-body">
                  <form action="app/addproduit.php" method="post" onsubmit="storeProduit(event, this)">
                    <label>Url :</label>
                    <input class="modal-input form-control form-control" id="url" name="url" type="text" placeholder="Entrer url image" required>
                    <label>Nom :</label>
                    <input class="modal-input form-control form-control" id="nom" name="nom" type="text" placeholder="Nom du produit" required>
                    <label>Description :</label>
                    <input class="modal-input form-control form-control" id="description" name="description" type="text" placeholder="Description produit" required>
                    <!-- Choix selection categorie -->
                    <label>Categorie :</label>
                    <p><select name="categorie" id="cat"></p>
                      <option value="Bidon" selected="selected">Bidon</option>
                      <option value="Machin">Machin</option>
                      <option value="Dudul">Dudul</option>
                    </select>

                    <!-- Fin selection -->
                      <div class="col-auto">
                        <button type="submit" id="addbtn" class="btne mb-2">Envoyer</button>
                      </div>
                  </form>
              <!-- Fin formulaire modal -->
              </div>
          </div>
      </div>
  </div>

    <!-- Affichage Produits -->
  <div id="produit-cont" class="container produit-cont">
    <?php include "include/produits.php";?>
  </div>


  <!-- Fin produits -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script type="text/javascript"  src="js/produits.js"></script> 
  </body>
</html>