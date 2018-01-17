$(function() {
  $('#salle').change(function() {
  $.post('inc/AffCleEnt.php', // La page de la requête
      {
          salle: $("#salle").val() // Id du menu des étages
      },

      function(data) // Fonction qui gère le retour
      {
        if(data != 'erreur') // Si il n'y a pas d'erreures
        {
          $('#AffCle').html(data); // Ajout des options dans le select
        }
        else
        {
            alert("erreur"); // Affichage du message en cas d'erreur
        }
      }
    );
  });
});
