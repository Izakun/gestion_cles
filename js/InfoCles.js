$(function() {
    $('#cles').change(function() {
        $.post('inc/InfoCles.php', // La page de la requête
        {
            cles: $("#cles").val(), // Id du menu des batiments
        },

        function(data) // Fonction qui gère le retour
        {
            if(data != 'erreur') // Si il n'y a pas d'erreures
            {
                $('#InfoCles').html(data); // Ajout des options dans le select
            }
            else
            {
                alert("erreur"); // Affichage du message en cas d'erreur
            }
        }
    );
});
});
