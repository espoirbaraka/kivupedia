<?php
$id = $_GET['art'];
$sql = "SELECT * FROM tbl_medicament
         INNER JOIN tbl_categorie
         ON tbl_medicament.CodeCategorie=tbl_categorie.CodeCategorie
        WHERE CodeMedicament = $id";
$req1 = $app->fetch($sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Detail article
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Detail article</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        if (isset($_SESSION['error'])) {
            echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Erreur!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
            echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Succès!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
            unset($_SESSION['success']);
        }
        ?>
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="./img/<?php echo $req1['Image']?>"
                             alt="User profile picture">

                        <h3 class="profile-username text-center"><?php echo $req1['Designation']; ?></h3>

                        <p class="text-muted text-center"><?php echo $req1['Categorie']; ?></p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Prix de vente</b> : <a class="pull-right"><?php echo $req1['pv']; ?> fc</a>
                            </li>
                            <li class="list-group-item">
                                <b>Stock disponible</b> : <a class="pull-right"><?php echo $req1['Stock']; ?></a>
                            </li>
                        </ul>


                    </div>
                    <!-- /.box-body -->
                </div>

                <!-- About Me Box -->

                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#historique" data-toggle="tab">Approvisionnement</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="historique">
                            <div style="padding-bottom: 50px;">
                                <form action="manager/create.php" class="form-horizontal" method="POST"
                                      enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                                    <input type="hidden" value="<?php echo $req1['pv']; ?>" name="pv">
                                    <input type="hidden" name="event" value="ACHETER_MEDICAMENT">
                                    <div class="form-group">
                                        <label for="edit_designation" class="col-sm-3 control-label">Quantite</label>

                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="" name="quantite">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_prix" class="col-sm-3 control-label">Prix d'achat unitaire(fc)</label>

                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="" name="prix">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="fournisseur" class="col-sm-3 control-label">Fournisseur</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="fournisseur">
                                                <?php
                                                $sql = "SELECT * FROM tbl_fournisseur";
                                                $req = $app->fetchPrepared($sql);
                                                foreach($req as $row){
                                                    ?>
                                                    <option value="<?php echo $row['CodeFournisseur'] ?>"><?php echo $row['NomFournisseur'].' '.$row['PostnomFournisseur'] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>




                                    <div style="float: right;">

                                        <button type="submit" class="btn btn-primary btn-flat" name="add"><i
                                                    class="fa fa-save"></i> Acheter
                                        </button>
                                    </div>

                                </form>
                            </div>

                            <table id="example1" class="table table-bordered table-hover" style="padding-top: 50px;">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Designation</th>
                                    <th>Quantite achetée</th>
                                    <th>Prix unitaire(fc)</th>
                                    <th>Date achat</th>
                                    <th>Fournisseur</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                $sql = "SELECT * FROM tbl_approvisionnement
                                INNER JOIN tbl_medicament
                                ON tbl_approvisionnement.CodeMedicament=tbl_medicament.CodeMedicament
                                INNER JOIN tbl_fournisseur
                                ON tbl_approvisionnement.CodeFournisseur=tbl_fournisseur.CodeFournisseur
                                WHERE tbl_medicament.CodeMedicament=$id";
                                $req = $app->fetchPrepared($sql);
                                foreach($req as $row){
                                    ?>
                                    <tr>
                                        <td><img src="img/<?php echo $row['Image']; ?>" style="width: 30px; height: 30px;"></td>
                                        <td><?php echo $row['Designation']; ?></td>
                                        <td><?php echo $row['qte']; ?></td>
                                        <td><?php echo $row['pu']; ?> fc</td>
                                        <td><?php echo $app->dateconv($row['DateApprov']); ?></td>
                                        <td><?php echo $row['NomFournisseur'].' '.$row['PostnomFournisseur']; ?></td>

                                    </tr>
                                    <?php
                                }
                                ?>

                                </tbody>

                            </table>
                        </div>


                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>