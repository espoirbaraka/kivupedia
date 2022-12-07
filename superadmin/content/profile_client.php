<?php
$id = $_GET['cli'];
$sql = "SELECT * FROM tbl_client WHERE CodeClient = $id";
$req1 = $app->fetch($sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Profil client
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Profil client</li>
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
                        <img class="profile-user-img img-responsive img-circle" src="./img/user.png"
                             alt="User profile picture">

                        <h3 class="profile-username text-center"><?php echo $req1['PrenomClient'].' '.$req1['NomClient']; ?></h3>


                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Email</b> : <a class="pull-right"><?php echo $req1['Email']; ?> </a>
                            </li>
                            <li class="list-group-item">
                                <b>Adresse</b> : <a class="pull-right"><?php echo $req1['Adresse']; ?></a>
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
                        <li class="active"><a href="#commande" data-toggle="tab">Commande</a></li>
                        <li><a href="#ordonnance" data-toggle="tab">Ordonnance</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="commande">
                            <div style="padding-bottom: 50px;">
                                <form action="manager/create.php" class="form-horizontal" method="POST"
                                      enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                                    <input type="hidden" name="event" value="CREATE_COMMANDE">
                                    <div class="form-group">
                                        <label for="edit_designation" class="col-sm-3 control-label">Date ordonnance</label>

                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="" name="date_ordonnance">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_prix" class="col-sm-3 control-label">Message au client</label>

                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="message" rows="4"></textarea>
                                        </div>
                                    </div>





                                    <div style="float: right;">

                                        <button type="submit" class="btn btn-primary btn-flat" name="add"><i
                                                class="fa fa-save"></i> Creer
                                        </button>
                                    </div>

                                </form>
                            </div>

                            <table id="example1" class="table table-bordered table-hover" style="padding-top: 50px;">
                                <thead>
                                <tr>
                                    <th>Date commande</th>
                                    <th>Date ordonnance</th>
                                    <th>Medicament</th>
                                    <th>Prix total</th>
                                    <th>Message</th>
                                    <th>Action</th>


                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                $sql = "SELECT * FROM tbl_commande
                                        WHERE CodeClient = $id";
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
                                        <td><?php echo $row['Observation']; ?></td>
                                        <td>
                                            <button class='btn btn-success btn-sm medicament btn-flat' data-id="<?php echo $row['CodeCommande'] ?>"><i class='fa fa-plus'></i> Medicament</button>
                                        </td>

                                    </tr>
                                    <?php
                                }
                                ?>

                                </tbody>

                            </table>
                        </div>

                        <div class="tab-pane" id="ordonnance">

                            <table id="example1" class="table table-bordered table-hover" style="padding-top: 50px;">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Hopital</th>
                                    <th>Medicament</th>
                                    <th>Description</th>
                                    <th>Lire</th>


                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                $sql = "SELECT * FROM tbl_ordonnance
                                        WHERE CodeClient = $id";
                                $req = $app->fetchPrepared($sql);
                                foreach($req as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $app->dateconv($row['Created_On']) ?></td>
                                        <td><?php echo $row['Hopital']; ?></td>
                                        <td><?php echo $row['Medicament']; ?></td>
                                        <td><?php echo $row['Description']; ?></td>
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