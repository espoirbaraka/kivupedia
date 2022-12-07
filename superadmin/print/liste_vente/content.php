<?php
//include '../../includes/sessionconnected.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <h2>LISTE DES CLIENTS</h2>
    <h5> Imprimmé le <?= date("d.m.Y h:i") ?></h5>
</header>
<div class="tab">
    <table>
        <thead>
        <tr>
            <th>Date</th>
            <th>Montant</th>
            <th>Medicament</th>
            <th>Client</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($req as $row) {
            $commande = $row['CodeCommande'];
            $sql2 = "SELECT * FROM tbl_detail_commande
                                            INNER JOIN tbl_commande
                                            ON tbl_detail_commande.CodeCommande=tbl_commande.CodeCommande
                                            INNER JOIN tbl_medicament
                                            ON tbl_detail_commande.CodeMedicament=tbl_medicament.CodeMedicament
                                            WHERE tbl_detail_commande.CodeCommande=$commande";
            $req2 = $app->fetchPrepared($sql2);
            ?>
            <tr>
                <td><?php echo $app->dateconv($row['DatePaiement']); ?></td>
                <td><?php echo $row['Montant']; ?> fc</td>
                <td><?php
                    foreach ($req2 as $row2){
                        ?>
                        |
                        <?php echo $row2['Quantite'].' '.$row2['Designation']; ?>
                        <?php
                    }
                    ?>
                </td>
                <td><?php echo $row['PrenomClient'].' '.$row['NomClient']; ?></td>

            </tr>
        <?php
        } ?>
        </tbody>
    </table>
</div>
</body>
</html>
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: 'Franklin Gothic Medium', 'Times New Roman', Times, serif;
    }

    body {
        padding: 5px;
    }

    .titre span {
        color: green;
        font-size: 1.3em;
    }

    header {
        width: 100%;
    }

    header h2 {
        text-align: center;
        margin: 5px 30px;
        border-bottom: 0.2px solid gray;
        font-weight: 100;
    }

    header h5 {
        text-align: center;
        margin: 5px 30px;
        color: red;
        font-weight: 100;
    }

    .tab {
        margin: 5px 30px;
        border: 0.2px solid black;
    }

    .tab table {
        border-collapse: collapse;
        width: 100%;
    }

    .tab table thead {
        background: rgba(128, 128, 128, 0.2);
        color: black;
    }

    .tab table thead tr th {
        padding: 5px 2px;
    }


    .tab table tbody tr td {
        border: 0.1px solid rgba(128, 128, 128, 0.2);
    }

    .tab table tbody tr:nth-child(even) {
        background: rgba(128, 128, 128, 0.1);
    }
</style>