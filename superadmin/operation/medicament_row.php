<?php
include '../class/app.php';
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $conn = $app->getPDO();

    $sql = "SELECT * FROM tbl_medicament WHERE CodeMedicament = $id";
    $req = $app->fetch($sql);


    echo json_encode($req);
}
?>