<?php
$id = $_GET['domaine'];
$sql = "SELECT *, t_domaine.Created_on as dat FROM t_domaine
         LEFT JOIN t_superadmin
         ON t_domaine.Created_by=t_superadmin.CodeSuper
        WHERE CodeDomaine = $id";
$req1 = $app->fetch($sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-weight: bold;">
            Detail domaine
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Detail domaine</li>
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
                        <img class="profile-user-img img-responsive img-circle" src="./img/logo_livre.png"
                             alt="User profile picture">

                        <h3 class="profile-username text-center"><?php echo $req1['Domaine']; ?></h3>



                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Création</b> : <a class="pull-right"><?php echo $app->dateconv($req1['dat']).' par '.$req1['NomComplet']; ?> </a>
                            </li>
                            <li class="list-group-item">
                                <b>Nombre d'article</b> : <a class="pull-right"><?php echo $req1['Domaine']; ?></a>
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
                        <li class="active"><a href="#historique" data-toggle="tab">Sous-domaine</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="historique">
                            <div style="padding-bottom: 50px;">
                                <form action="manager/create.php" class="form-horizontal" method="POST"
                                      enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $req1['CodeDomaine']; ?>" name="domaine">
                                    <input type="hidden" name="event" value="CREATE_SOUS_DOMAINE">
                                    <div class="form-group">
                                        <label for="edit_designation" class="col-sm-3 control-label">Sous-domaine</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="" name="sous-domaine" required>
                                        </div>
                                    </div>

                                    <div style="float: right;">

                                        <button type="submit" class="btn btn-primary btn-flat" name="add"><i
                                                    class="fa fa-save"></i> Ajouter
                                        </button>
                                    </div>

                                </form>
                            </div>

                            <table id="example1" class="table table-bordered table-hover" style="padding-top: 50px;">
                                <thead>
                                <tr>
                                    <th>Sous-domaine</th>
                                    <th>Nombre d'article</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                $sql = "SELECT * FROM t_sous_domaine
                                WHERE t_sous_domaine.CodeDomaine=$id";
                                $req = $app->fetchPrepared($sql);
                                foreach($req as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['Sous_domaine']; ?></td>
                                        <td><?php echo $row['Sous_domaine']; ?></td>
                                        <td>
                                            <button class='btn btn-success btn-sm edit btn-flat' data-id="<?php echo $row['CodeSousDomaine'] ?>"><i class='fa fa-edit'></i> </button>
                                            <button class='btn btn-danger btn-sm delete btn-flat' data-id="<?php echo $row['CodeSousDomaine'] ?>"><i class='fa fa-trash'></i> </button>
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