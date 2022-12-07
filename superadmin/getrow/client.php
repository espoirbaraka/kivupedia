<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/client_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.client').val(response.CodeClient);
                $('.fullname').html(response.NomClient);
            }
        });
    }
</script>