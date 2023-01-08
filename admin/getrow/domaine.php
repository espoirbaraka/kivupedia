<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/domaine_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.domaine').val(response.CodeDomaine);
                $('#edit_dom').val(response.Domaine);
                $('.fullname').html(response.Domaine);
            }
        });
    }
</script>