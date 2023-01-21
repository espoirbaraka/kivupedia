<?php
$id = $_GET['offre'];
$sql = "SELECT * FROM t_offre   
         LEFT JOIN t_superadmin
         ON t_offre.Created_on=t_superadmin.CodeSuper
         WHERE CodeOffre = $id";
$req1 = $app->fetch($sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Detail offre
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Detail offre</li>
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
                        <img class="profile-user-img img-responsive img-circle" src="img/work.webp"
                             alt="User profile picture">

                        <a class="btn file btn-primary btn-sm" data-id="<?php echo $req1['Entreprise'] ?>"><i class="fa fa-file"></i></a>



                        <ul class="list-group list-group-unbordered">

                            <li class="list-group-item">
                                <b>Ajout</b> : <a class="pull-right"> le <?php echo $app->dateconv($req1['Created_on']); ?> </a>
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

                <div class="row">
                    <div class="col-md-12">
                        <!-- The time line -->
                        <ul class="timeline">
                            <!-- timeline time label -->
                            <li class="time-label">
                  <span class="bg-red">
                    Ajouté par <?php
                      echo $req1['NomComplet'];
                      ?>
                  </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-user bg-blue"></i>

                                <div class="timeline-item">
                                    <h3 class="timeline-header"><a href="#">Nombre des postes</a></h3>

                                    <div class="timeline-body">
                                        <?php echo $req1['NombrePoste']; ?>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <i class="fa fa-laptop bg-blue"></i>

                                <div class="timeline-item">
                                    <h3 class="timeline-header"><a href="#">Poste</a></h3>

                                    <div class="timeline-body">
                                        <?php echo $req1['Poste']; ?>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-calendar bg-aqua"></i>

                                <div class="timeline-item">

                                    <h3 class="timeline-header no-border"><a href="#">Echéance : </a> <?php
                                        echo "Du".$app->dateconv($req1['DateDebut'])." au ".$app->dateconv($req1['DateExpiration']);
                                        ?></h3>
                                </div>
                            </li>





                            <li>
                                <i class="fa fa-pencil bg-maroon"></i>

                                <div class="timeline-item">

                                    <div class="timeline-body">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item"
                                                    src="offre/<?php echo $req1['Fichier']; ?>"
                                                    allowfullscreen></iframe>
                                        </div>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- /.col -->
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>