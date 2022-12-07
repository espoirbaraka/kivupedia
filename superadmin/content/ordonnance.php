<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ordonnances récus
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Ordonnances récus</li>
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
                                <th>Date</th>
                                <th>Hopital</th>
                                <th>Medicament</th>
                                <th>Description</th>
                                <th>Client</th>
                                <th>Lire</th>


                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $sql = "SELECT * FROM tbl_ordonnance
                                        INNER JOIN tbl_client
                                        ON tbl_ordonnance.CodeClient=tbl_client.CodeClient";
                            $req = $app->fetchPrepared($sql);
                            foreach($req as $row){
                                ?>
                                <tr>
                                    <td><?php echo $app->dateconv($row['Created_On']) ?></td>
                                    <td><?php echo $row['Hopital']; ?></td>
                                    <td><?php echo $row['Medicament']; ?></td>
                                    <td><?php echo $row['Description']; ?></td>
                                    <td><?php echo $row['PrenomClient'].' '.$row['NomClient']; ?></td>
                                    <td>
                                        <a href="img/<?php echo $row['Fichier']; ?>" target="_blank" class='btn btn-primary btn-sm btn-flat'><i class='fa fa-book'></i> Lire</a>
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




