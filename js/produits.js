

//  envoyer les votes avec Ajax
 function storeUpvote(event, form){
    event.preventDefault();

    $.post({
        url: 'app/vote.php',
        data : $(form).serialize(),
        success: function(error){
            if (error){
                alert(error);
            }
            $(".produit-cont").load("include/produits.php");
        }
    })
};


 function storeProduit(event, form){
    event.preventDefault();

    $.post({
        url: 'app/addproduit.php',
        data : $(form).serialize(),
        success: function(error){
            if (error){
                alert(error);
            }
            location.reload();
            $("#url").value("");
            $("#nom").value("");
            $("#description").value("");
            
        }
    })
};

function storeComm(event, form){
    event.preventDefault();

    $.post({
        url: 'app/commentaire.php',
        data : $(form).serialize(),
        success: function(error){
            if (error){
                alert(error);
            }
            // $(".modalizer").modal("show");
            location.reload();
            
        }
    })
};

// // Efface les champs d'entrées d'ajouts produits quand le bouton "envoyer" est cliqué
// $("#addbtn").click(function(){
//     document.getElementsByName("url")[0].value"";
//     document.getElementsByName("nom")[0].value"";
//     document.getElementsByName("description")[0].value"";
//     document.getElementsByName("categorie")[0].value"";
// }