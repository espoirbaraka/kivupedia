<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/item_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.item').val(response.CodeItem);
            }
        });
    }
</script>