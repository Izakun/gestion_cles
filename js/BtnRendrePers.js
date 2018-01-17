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
