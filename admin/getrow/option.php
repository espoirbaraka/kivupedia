<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/option_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.option').val(response.CodeOption);
                $('#edit_option').val(response.Designation);
                $('.fullname').html(response.Designation);
            }
        });
    }
</script>