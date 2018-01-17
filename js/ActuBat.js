function bat()
{
  var choix=document.getElementById("batiment").value;
  var etage=document.getElementById("etage");

  switch (choix) {
    case "Bat A":
      var newOptions = '<option selected disabled>Selectionner un étage</option><option value=RDCH>RDC</option><option value="1er étage">1</option>';
      etage.innerHTML = newOptions;
      break;
    case "Bat B":
      var newOptions = '<option selected disabled>Selectionner un étage</option><option value=RDCH>RDC</option><option value="1er étage">1</option><option value="2eme étage">2</option>';
      etage.innerHTML = newOptions;
      break;
    case "Bat C":
      var newOptions = '<option selected disabled>Selectionner un étage</option><option value="S1">-1</option><option value=RDCH>RDC</option><option value="1er étage">1</option>';
      etage.innerHTML = newOptions;
      break;
    case "Bat D":
      var newOptions = '<option selected disabled>Selectionner un étage</option><option value=RDCH>RDC</option><option value="1er étage">1</option>';
      etage.innerHTML = newOptions;
      break;
    case "Bat E":
      var newOptions = '<option selected disabled>Selectionner un étage</option><option value=RDCH>RDC</option><option value="1er étage">1</option>';
      etage.innerHTML = newOptions;
      break;
    /*case "Bat F":
      var newOptions = '<option selected disabled>Selectionner un étage</option><option value=RDCH>RDC</option><option value="1er étage">1</option><option value="2eme étage">2</option><option value="3">3</option>';
      etage.innerHTML = newOptions;
      break;*/
    case "Bat G":
      var newOptions = '<option selected disabled>Selectionner un étage</option><option value=RDCH>RDC</option>'
      etage.innerHTML = newOptions;
      break;
    default:
      break;
  }
}
