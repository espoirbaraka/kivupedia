<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Nos articles
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Nos articles</li>
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

                    <div class="box-header">
                        <a href="#addarticle" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nouveau</a>
                        <a href="print/liste_medicament/pdf.php" target="_blank" style="float: right;" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-print"></i> Imprimer</a>
                    </div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Designation</th>
                                <th>Categorie</th>
                                <th>Stock en cours</th>
                                <th>Statut</th>
                                <th>Prix de vente(fc)</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $sql = "SELECT * FROM tbl_medicament
                                INNER JOIN tbl_categorie
                                ON tbl_medicament.CodeCategorie=tbl_categorie.CodeCategorie";
                            $req = $app->fetchPrepared($sql);
                            foreach($req as $row){
                                $status = ($row['Stock']) ? '<span class="label label-success">Disponible</span>' : '<span class="label label-danger">Non disponible</span>';
                                ?>
                                <tr>
                                    <td><img src="img/<?php echo $row['Image']; ?>" style="width: 30px; height: 30px;"></td>
                                    <td><?php echo $row['Designation']; ?></td>
                                    <td><?php echo $row['Categorie']; ?></td>
                                    <td><?php echo $row['Stock']; ?></td>
                                    <td><?php echo $status; ?></td>
                                    <td><?php echo $row['pv']; ?> fc</td>
                                    <td>
                                        <button class='btn btn-success btn-sm edit btn-flat' data-id="<?php echo $row['CodeMedicament'] ?>"><i class='fa fa-edit'></i> </button>
                                        <a class='btn btn-primary btn-sm btn-flat' href="detail_article.php?art=<?php echo $row['CodeMedicament'] ?>"><i class='fa fa-thermometer'></i> Acheter </a>
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




