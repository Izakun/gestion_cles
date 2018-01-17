$(function() {
    $('#submit').on("click", function() {
        $.post('inc/AddUser.php', // La page de la requête
        {
            nom: $("#personnel").val(), // Nom du personnel
            cle1: $("#cle1").val(), // Nom de la clé
            cle2: $("#cle2").val(), // Nom de la clé
            cle3: $("#cle3").val(), // Nom de la clé
        },

        function(data) // Fonction qui gère le retour
        {
            if(data != 'erreur') // Si il n'y a pas d'erreures
            {
                $('#popup').html(data);
                $.get("pretPersonnel.php", function(data) {
                    $(".cours").replaceWith($(data).find(".cours"));
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
