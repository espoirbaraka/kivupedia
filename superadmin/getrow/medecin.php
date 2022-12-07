<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/medecin_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.medecin').val(response.CodeMedecin);
                $('#edit_nom').val(response.NomMedecin);
                $('#edit_postnom').val(response.PostnomMedecin);
                $('#edit_prenom').val(response.PrenomMedecin);
                $('#edit_phone').val(response.TelephoneMedecin);
                $('.fullname').html(response.NomMedecin);
            }
        });
    }
</script>