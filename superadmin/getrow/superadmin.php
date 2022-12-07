<script>
    function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'operation/superadmin_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.user').val(response.CodeSuper);
      $('#edit_nom').val(response.NomComplet);
      $('#edit_email').val(response.Email);
      $('#edit_password').val(response.Password);
      $('.fullname').html(response.NomComplet);
    }
  });
}
</script>