<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/fournisseur_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.fournisseur').val(response.CodeFournisseur);
                $('#edit_nom').val(response.NomFournisseur);
                $('#edit_postnom').val(response.PostnomFournisseur);
                $('#edit_prenom').val(response.PrenomFournisseur);
                $('#edit_adresse').val(response.Adresse);
                $('.fullname').html(response.NomFournisseur);
            }
        });
    }
</script>