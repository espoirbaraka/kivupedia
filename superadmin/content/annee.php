<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-weight: bold;">
            Annee academique
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Annee academique</li>
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
                        <a href="#addannee" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nouveau</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Annee</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM t_annee_academique";
                            $req = $app->fetchPrepared($sql);
                            foreach($req as $row){
                                ?>
                                <tr>
                                    <td><?php echo $row['Annee']; ?></td>
                                    <td>
                                        <button class='btn btn-success btn-sm edit btn-flat' data-id="<?php echo $row['CodeAnnee'] ?>"><i class='fa fa-edit'></i> </button>
                                        <button class='btn btn-danger btn-sm delete btn-flat' data-id="<?php echo $row['CodeAnnee'] ?>"><i class='fa fa-trash'></i> </button>
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




