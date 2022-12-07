<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/ordonnance_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.ordonnance').val(response.CodeOrdonnance);
            }
        });
    }
</script>