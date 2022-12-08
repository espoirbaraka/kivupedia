<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-weight: bold;">
            Ajouter un livre
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Ajouter un livre</li>
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
                        <form action="manager/create.php" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                    <input type="hidden" name="event" value="CREATE_LIVRE">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Titre <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="titre" required>
                                        </div>

                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Domaine <span style="color: red;">*</span></label>
                                            <select name="domaine" id="domaine" class="form-control select2-example" onchange="FetchSousDomaine(this.value)" required>
                                                <option value="">-- Selectionnez --</option>
                                                <?php
                                                $sql = "SELECT * FROM t_domaine";
                                                $req = $app->fetchPrepared($sql);
                                                foreach ($req as $row){
                                                    ?>
                                                    <option value="<?php echo $row['CodeDomaine'] ?>"><?php echo $row['Domaine'] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>

                                    </div>



                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Sous-domaine</label>
                                            <select name="s_domaine" id="s_domaine" class="form-control select2-example">

                                            </select>
                                        </div>

                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Auteur principal</label>
                                            <input type="text" class="form-control" name="auteur">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Description </label>
                                            <textarea class="form-control" name="description" rows="4"></textarea>
                                        </div>

                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Nom editeur</label>
                                            <input type="text" class="form-control" name="editeur">
                                        </div>

                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Lieu edition</label>
                                            <input type="text" class="form-control" name="edition">
                                        </div>

                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input type="text" class="form-control" name="isbn">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Langue </label>
                                            <select name="langue" id="langue" class="form-control select2-example">
                                                <option value="">-- Selectionnez --</option>
                                                <?php
                                                $sql = "SELECT * FROM t_langue";
                                                $req = $app->fetchPrepared($sql);
                                                foreach ($req as $row){
                                                    ?>
                                                    <option value="<?php echo $row['CodeLangue'] ?>"><?php echo $row['Langue'] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Fichier <span style="color: red;">(PDF, max: 10 MB)  *</span></label>
                                            <input type="file" class="form-control" name="fichier" required>
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




