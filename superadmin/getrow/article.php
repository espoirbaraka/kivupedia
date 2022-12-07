<script>
    function getRow(id){
        $.ajax({
            type: 'POST',
            url: 'operation/medicament_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
                $('.medicament').val(response.CodeMedicament);
                $('#edit_designation').val(response.Designation);
                $('#edit_prix').val(response.pv);
                $('.fullname').html(response.Designation);
            }
        });
    }
</script>