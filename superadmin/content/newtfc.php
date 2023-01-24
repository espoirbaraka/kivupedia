<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-weight: bold;">
            Ajouter un article
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Ajouter un article</li>
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
                                <input type="hidden" name="event" value="CREATE_MEMOIRE">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Sujet <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="sujet" required>
                                    </div>

                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Auteur <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="auteur" required>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Année academique <span style="color: red;">*</span></label>
                                        <select name="annee" id="annee" class="form-control select2-example" required>
                                            <option value="">-- Selectionnez --</option>
                                            <?php
                                            $sql = "SELECT * FROM t_annee_academique ORDER BY Annee DESC";
                                            $req = $app->fetchPrepared($sql);
                                            foreach ($req as $row){
                                                ?>
                                                <option value="<?php echo $row['CodeAnnee'] ?>"><?php echo $row['Annee'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Institution (Université) <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="institution" required>
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Faculté <span style="color: red;">*</span></label>
                                        <select name="faculte" id="faculte" class="form-control select2-example" required>
                                            <option value="">-- Selectionnez --</option>
                                            <?php
                                            $sql = "SELECT * FROM t_faculte";
                                            $req = $app->fetchPrepared($sql);
                                            foreach ($req as $row){
                                                ?>
                                                <option value="<?php echo $row['CodeFaculte'] ?>"><?php echo $row['Faculte'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Type <span style="color: red;">*</span></label>
                                        <select name="categorie" id="categorie" class="form-control select2-example" required>
                                            <option value="">-- Selectionnez --</option>
                                            <?php
                                            $sql = "SELECT * FROM t_categorie_memoire";
                                            $req = $app->fetchPrepared($sql);
                                            foreach ($req as $row){
                                                ?>
                                                <option value="<?php echo $row['CodeCategorie'] ?>"><?php echo $row['Categorie'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Fichier <span style="color: red;">*(PDF, max: 10 MB)</span></label>
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




