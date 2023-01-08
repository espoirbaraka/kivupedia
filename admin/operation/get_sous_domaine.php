<?php
include '../../class/app.php';
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $conn = $app->getPDO();

    $sql = "SELECT * FROM t_sous_domaine WHERE CodeDomaine = $id";
    $data = $app->fetchPrepared($sql);
    foreach ($data as $row){
        echo '<option value='.$row['CodeSousDomaine'].'>'.$row['Sous_domaine'].'</option>';
    }
}
?>