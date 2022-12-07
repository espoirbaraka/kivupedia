<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Commandes
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Commandes</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        if(isset($_SESSION['error'])){
            echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Erreur!</h4>
              ".$_SESSION['error']."
            </div>
          ";
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
            echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Succès!</h4>
              ".$_SESSION['success']."
            </div>
          ";
            unset($_SESSION['success']);
        }
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box" style="overflow: auto;">

                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Date commande</th>
                                <th>Date ordonnance</th>
                                <th>Medicament</th>
                                <th>Prix total</th>
                                <th>Client</th>
                                <th>Action</th>


                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $sql = "SELECT * FROM tbl_commande INNER JOIN tbl_client
                                    ON tbl_commande.CodeClient=tbl_client.CodeClient";
                            $req = $app->fetchPrepared($sql);
                            foreach($req as $row){
                                $commande = $row['CodeCommande'];
                                $sql2 = "SELECT * FROM tbl_detail_commande
                                            INNER JOIN tbl_commande
                                            ON tbl_detail_commande.CodeCommande=tbl_commande.CodeCommande
                                            INNER JOIN tbl_medicament
                                            ON tbl_detail_commande.CodeMedicament=tbl_medicament.CodeMedicament
                                            WHERE tbl_detail_commande.CodeCommande=$commande";
                                $req2 = $app->fetchPrepared($sql2);

                                $sql3 = "SELECT SUM(pv*Quantite) as pv FROM tbl_detail_commande
                                                INNER JOIN tbl_medicament
                                                ON tbl_detail_commande.CodeMedicament=tbl_medicament.CodeMedicament
                                                WHERE tbl_detail_commande.CodeCommande=$commande";
                                $sql3 = $app->fetch($sql3);
                                ?>
                                <tr>
                                    <td><?php echo $app->dateconv($row['DateCommande']) ?></td>
                                    <td><?php echo $app->dateconv($row['DateOrdonnance']); ?></td>
                                    <td><?php
                                        foreach ($req2 as $row2){
                                            ?>
                                            |
                                            <?php echo $row2['Quantite'].' '.$row2['Designation']; ?>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $sql3['pv']; ?> fc</td>
                                    <td><?php echo $row['PrenomClient'].' '.$row['NomClient']; ?></td>
                                    <td>
                                        <?php
                                        if($row['Status'] == 0){
                                            ?>
                                            <button class='btn btn-success btn-sm vendre btn-flat' data-id="<?php echo $row['CodeCommande'] ?>"><i class='fa fa-money'></i> Vendre</button>
                                            <?php
                                        }
                                        ?>

                                    </td>

                                </tr>
                                <?php
                            }
                            ?>

                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->




                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>




