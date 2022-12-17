<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-weight: bold;">
            ITEM
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">ITEM</li>
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
                                <th>Option</th>
                                <th>Session</th>
                                <th>Annee</th>
                                <th>Type fichier</th>
                                <th>Disponibilite</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM t_item LEFT JOIN t_annee_academique
                                    ON t_item.CodeAnnee=t_annee_academique.CodeAnnee
                                    LEFT JOIN t_option
                                    On t_item.CodeOption=t_option.CodeOption
                                    INNER JOIN t_session_exetat
                                    ON t_item.CodeSession=t_session_exetat.CodeSession";
                            $req = $app->fetchPrepared($sql);
                            foreach($req as $row){
                                $status = ($row['Statut']) ? '<span class="label label-success">Disponible</span>' : '<span class="label label-danger">Non-disponible</span>';
                                $active = (!$row['Statut']) ? '<span class="pull-right"><a href="#activate" class="status" data-toggle="modal" data-id="'.$row['CodeItem'].'"><i class="fa fa-check-square-o"></i></a></span>' : '<span class="pull-right"><a href="#desactivate" class="status" data-toggle="modal" data-id="'.$row['CodeItem'].'"><i class="fa fa-check-square-o"></i></a></span>';
                                ?>
                                <tr>
                                    <td><?php echo $row['Designation']; ?></td>
                                    <td><?php echo $row['Session']; ?></td>
                                    <td><?php echo $row['Annee']; ?></td>
                                    <td><?php echo $row['TypeFichier']; ?></td>
                                    <td><?php echo $status; echo $active;?></td>
                                    <td>
                                        <a href="detail_livre?livre=<?php echo $row['CodeItem'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-angle-double-down"></i> Detail</a>
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




