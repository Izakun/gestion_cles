$('area').on('click', function() {
  $ids = $(this).attr('id')
  $.post('inc/InfoPorte.php',
    {
      ids: $(this).attr('id')
    },

    function(data)
    {
      if(data != 'erreur')
      {
        $('#modal-content').html(data);
      }
      else
      {
        alert('erreur')
      }
    }
)
});
