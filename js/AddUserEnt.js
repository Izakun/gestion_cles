$(function() {
  $('#submit').on("click", function() {
  $.post('inc/AddUser.php', // La page de la requête
      {
        nom: $("#nom").val(), // Id du menu des batiments
        prenom: $("#prenom").val(), // Id du menu des batiments
        entreprise: $("#entreprise").val(), // Id du menu des batiments
        batiment: $("#batiment").val(), // Id du menu des batiments
        etage: $("#etage").val(), // Id du menu des étages
        salle: $("#salle").val() // Id du menu des batiments
      },

      function(data) // Fonction qui gère le retour
      {
        if(data != 'erreur') // Si il n'y a pas d'erreures
        {
           $('#popup').html(data);
           $('#AffCle').empty();
           $.get("pretEntreprise.php", function(data) {
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
