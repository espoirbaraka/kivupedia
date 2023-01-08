<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-weight: bold;">
            Cours
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Cours</li>
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

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Institution</th>
                                <th>Disponibilite</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM t_cours";
                            $req = $app->fetchPrepared($sql);
                            foreach($req as $row){
                                $status = ($row['Statut']) ? '<span class="label label-success">Disponible</span>' : '<span class="label label-danger">Non-disponible</span>';
                                $active = (!$row['Statut']) ? '<span class="pull-right"><a href="#activate" class="status" data-toggle="modal" data-id="'.$row['CodeCours'].'"><i class="fa fa-check-square-o"></i></a></span>' : '<span class="pull-right"><a href="#desactivate" class="status" data-toggle="modal" data-id="'.$row['CodeCours'].'"><i class="fa fa-check-square-o"></i></a></span>';
                                ?>
                                <tr>
                                    <td><?php echo $row['Cours']; ?></td>
                                    <td><?php echo $row['Institution']; ?></td>
                                    <td><?php echo $status; echo $active;?></td>
                                    <td>
                                        <a href="detail_cours?cours=<?php echo $row['CodeCours'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-angle-double-down"></i> Detail</a>
                                        <button class='btn btn-success btn-sm edit btn-flat' data-id="<?php echo $row['CodeCours'] ?>"><i class='fa fa-edit'></i> </button>
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




