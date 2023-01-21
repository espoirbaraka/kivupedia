<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/cours_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.cours').val(response.CodeCours);
                $('#edit_cours').val(response.Cours);
                $('#edit_institution').val(response.Institution);
                $('.fullname').html(response.Cours);
            }
        });
    }
</script>