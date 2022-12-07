<?php
include '../class/app.php';
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $conn = $app->getPDO();

    $sql = "SELECT tbl_commande.CodeCommande as commande, tbl_commande.CodeClient as cli, SUM(pv*Quantite) as pv FROM tbl_detail_commande
            INNER JOIN tbl_medicament
            ON tbl_detail_commande.CodeMedicament=tbl_medicament.CodeMedicament
            INNER JOIN tbl_commande
            ON tbl_detail_commande.CodeCommande=tbl_commande.CodeCommande
            WHERE tbl_detail_commande.CodeCommande=$id";
    $req = $app->fetch($sql);


    echo json_encode($req);
}
?>