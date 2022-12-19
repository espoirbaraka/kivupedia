<?php
$id = $_GET['article'];
$sql = "SELECT * FROM t_memoire
         LEFT JOIN t_categorie_memoire
         ON t_memoire.CodeCategorie=t_categorie_memoire.CodeCategorie
         LEFT JOIN t_faculte
         ON t_memoire.CodeFaculte=t_faculte.CodeFaculte       
         LEFT JOIN t_superadmin
         ON t_memoire.CodeAdmin=t_superadmin.CodeSuper
         LEFT JOIN t_compte
         ON t_memoire.CodeCompte=t_compte.CodeCompte
         WHERE CodeMemoire = $id";
$req1 = $app->fetch($sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $req1['Categorie'] ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active"><?php echo $req1['Categorie'] ?></li>
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
                        <img class="profile-user-img img-responsive img-circle" src="img/logo_livre.png"
                             alt="User profile picture">

                        <a class="btn img btn-primary btn-sm" data-id="<?php echo $req1['CodeMemoire'] ?>"><i class="fa fa-file"></i></a>



                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Nombre de lecture</b> : <a class="pull-right"><?php echo $req1['Readed']; ?> </a>
                            </li>
                            <li class="list-group-item">
                                <b>Mention J'aime</b> : <a class="pull-right"><?php echo $req1['Liked']; ?> </a>
                            </li>
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
                    Ajouté le <?php echo $app->dateconv($req1['Created_on']); ?> par <?php
                      if(isset($req1['NomComplet'])){
                          echo $req1['NomComplet'].'<span style="color: darkblue;">(Administrateur)</span>';
                      }else{
                          echo $req1['NomPersonne'].' '.$req1['PostnomPersonne'].' '.$req1['PrenomPersonne'].'<span style="color: darkblue;">(Visiteur)</span>';
                      }
                      ?>
                  </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-book bg-blue"></i>

                                <div class="timeline-item">
                                    <h3 class="timeline-header"><a href="#">Titre de l'ouvrage</a></h3>

                                    <div class="timeline-body">
                                        <?php echo $req1['Titre']; ?>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <i class="fa fa-book bg-red"></i>

                                <div class="timeline-item">
                                    <h3 class="timeline-header"><a href="#">Sous-titre</a></h3>

                                    <div class="timeline-body">
                                        <?php
                                        if($req1['SousTitre'] != ''){
                                            echo $req1['SousTitre'];
                                        }else{
                                            echo "<span style='color: red;'>Pas de sous-titre</span>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-user bg-aqua"></i>

                                <div class="timeline-item">

                                    <h3 class="timeline-header no-border"><a href="#">Auteur : </a> <?php
                                        if($req1['AuteurPrincipal'] != ''){
                                            echo $req1['AuteurPrincipal'];
                                        }else{
                                            echo "<span style='color: red;'>Auteur inconnu</span>";
                                        }
                                        ?></h3>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-comments bg-yellow"></i>

                                <div class="timeline-item">

                                    <h3 class="timeline-header"><a href="#">Description</a> </h3>

                                    <div class="timeline-body">
                                        <?php echo $req1['Description'] ?>
                                    </div>

                                </div>
                            </li>


                            <li>
                                <i class="fa fa-pencil bg-maroon"></i>

                                <div class="timeline-item">

                                    <div class="timeline-body">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item"
                                                    src="fichier/<?php echo $req1['Fichier_livre']; ?>"
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