<script>
    function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'operation/user_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.user').val(response.CodeUser);
      $('#edit_email').val(response.Email);
      $('#edit_password').val(response.Password);
      $('.fullname').html(response.Username);
    }
  });
}
</script>