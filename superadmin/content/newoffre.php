<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-weight: bold;">
            Ajouter un offre d'emploi
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Ajouter un offre d'emploi</li>
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
                <div class="box">

                    <div class="box-body">
                        <form action="manager/create.php" method="POST" enctype="multipart/form-data">

                            <div class="row">
                                <input type="hidden" name="event" value="CREATE_OFFRE">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Entreprise <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="entreprise" required>
                                    </div>

                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Nombre des postes <span style="color: red;">*</span></label>
                                        <input type="number" class="form-control" name="nombre" required>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Description du poste <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="poste" required>
                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Début pour postuler <span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" name="debut" required>
                                    </div>

                                </div>


                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Fin pour postuler <span style="color: red;">*</span></label>
                                        <input type="date" class="form-control" name="fin" required>
                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Fichier <span style="color: red;">*</span></label>
                                        <input type="file" class="form-control" name="fichier" required>
                                    </div>

                                </div>


                            </div>












                            <div style="float: right;">

                                <button type="submit" class="btn btn-primary btn-flat" name="add"><i
                                        class="fa fa-save"></i> Publier
                                </button>
                            </div>



                    </div>

                    </form>
                    <!-- /.row -->
                </div>




                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>




