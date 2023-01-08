<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/books_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.livre').val(response.CodeLivre);
                $('#edit_titre').val(response.Titre);
                $('#edit_sous_titre').val(response.SousTitre);
                $('#edit_description').val(response.Description);
                $('#edit_auteur').val(response.AuteurPrincipal);
                $('#edit_editeur').val(response.NomEditeur);
                $('#edit_edition').val(response.LieuEdition);
                $('#edit_isbn').val(response.ISBN);
                $('.fullname').html(response.Titre);
            }
        });
    }
</script>