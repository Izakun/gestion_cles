
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/ActuBat.js"></script>
<script type="text/javascript" src="js/ActuSalle.js"></script>
<script type="text/javascript" src="js/AddUserEnt.js"></script>
<script type="text/javascript" src="js/AddUserPers.js"></script>
<script type="text/javascript" src="js/AffCleEnt.js"></script>
<script type="text/javascript" src="js/BtnRendreEnt.js"></script>
<script type="text/javascript" src="js/BtnRendrePers.js"></script>
<script type="text/javascript" src="js/footer.js"></script>
<script type="text/javascript" src="js/InfoCles.js"></script>
<script type="text/javascript" src="js/InfoPorte.js"></script>
<script>
  $(function() {
    $('.building-map').hide();
    $('#changeBuilding').on('change', function() {
      $('.building-map').hide();
      $('#Bat' + $(this).val()).show();
    });
  });
</script>
<script language='javascript' type='text/javascript'>
  function printdiv(imprimer)
  {
    var newstr = document.all.item(imprimer).innerHTML;
    var oldstr = document.body.innerHTML;
    document.body.innerHTML = newstr;
    window.print();
    document.body.innerHTML = oldstr;
    $(function() {
        $('.rendre').click(function() {
            var id = this.id;//$( this ).attr('id');
            $.post('inc/BtnRendreEnt.php', // La page de la requête
                { userid: id, }, // Id du menu des batiments
                function(data) // Fonction qui gère le retour
                {
                    if(data != 'erreur') // Si il n'y a pas d'erreures
                    {
                        $.get("pretEntreprise.php", function(data) {
                            $(".cours").replaceWith($(data).find(".cours"));
                            $(".historique").replaceWith($(data).find(".historique"));
                        });
                    }
                    else
                    {
                        alert("erreur"); // Affichage du message en cas d'erreur
                    }
                }
            );
        });
    });

    return false;
  }
</script>
<script language='javascript' type='text/javascript'>
function printdiv(imprimer)
{
    var newstr = document.all.item(imprimer).innerHTML;
    var oldstr = document.body.innerHTML;
    document.body.innerHTML = newstr;
    window.print();
    document.body.innerHTML = oldstr;
    $(function() {
        $('.rendre').click(function() {
            var id = this.id;//$( this ).attr('id');
            $.post('inc/BtnRendrePers.php', // La page de la requête
            { userid: id, }, // Id du menu des batiments
            function(data) // Fonction qui gère le retour
            {
                if(data != 'erreur') // Si il n'y a pas d'erreures
                {
                    $.get("pretPersonnel.php", function(data) {
                        $(".cours").replaceWith($(data).find(".cours"));
                        $(".historique").replaceWith($(data).find(".historique"));
                    });
                }
                else
                {
                    alert("erreur"); // Affichage du message en cas d'erreur
                }
            }
        );
    });
    });
    return false;

}
</script>

</body>

<div id='footer'>
<?php
date_default_timezone_set('UTC');
echo "<p class='text-center'><a href='admin/admin.php'><strong style='text-align: right;'>Panel administrateur</strong></a></br>© Copyright ".date("Y")." | Tous droits réservés Alan Carrer</p>"
?>

</footer>
</html>
