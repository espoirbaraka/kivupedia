<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/offre_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.offre').val(response.CodeOffre);
                $('#edit_entreprise').val(response.Entreprise);
                $('#edit_nombre').val(response.NombrePoste);
                $('#edit_poste').val(response.Poste);
                $('.fullname').html(response.Entreprise);
            }
        });
    }
</script>