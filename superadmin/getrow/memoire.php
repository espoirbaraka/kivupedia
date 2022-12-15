<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/memoire_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.memoire').val(response.CodeMemoire);
                $('#edit_sujet').val(response.Sujet);
                $('#edit_auteur').val(response.Auteur);
                $('#edit_institution').val(response.Institution);
                $('.fullname').html(response.Sujet);
            }
        });
    }
</script>