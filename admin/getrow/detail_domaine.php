<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/detail_domaine_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.sous_domaine').val(response.CodeSousDomaine);
                $('#edit_dom').val(response.Sous_domaine);
                $('.fullname').html(response.Sous_domaine);
            }
        });
    }
</script>