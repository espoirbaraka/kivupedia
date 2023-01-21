<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/annee_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.annee').val(response.CodeAnnee);
                $('#edit_annee').val(response.Annee);
                $('.fullname').html(response.Annee);
            }
        });
    }
</script>