<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/commande_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.commande').val(response.commande);
                $('.client').val(response.cli);
                $('.prix').val(response.pv);
                $('.pv').html(response.pv+' '+'fc');
            }
        });
    }
</script>