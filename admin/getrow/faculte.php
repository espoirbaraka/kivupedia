<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/faculte_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.faculte').val(response.CodeFaculte);
                $('#edit_faculte').val(response.Faculte);
                $('.fullname').html(response.Faculte);
            }
        });
    }
</script>