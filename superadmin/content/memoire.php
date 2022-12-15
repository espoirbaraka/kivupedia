<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-weight: bold;">
            Memoire/TFC
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Memoire/TFC</li>
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
                                <th>Image</th>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Auteur</th>
                                <th>Page</th>
                                <th>Disponibilité</th>
                                <th>Domaine</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM t_livre LEFT JOIN t_domaine
                                    ON t_livre.CodeDomaine=t_domaine.CodeDomaine
                                    LEFT JOIN t_langue
                                    ON t_livre.CodeLangue=t_langue.CodeLangue";
                            $req = $app->fetchPrepared($sql);
                            foreach($req as $row){
                                $status = ($row['Statut']) ? '<span class="label label-success">Disponible</span>' : '<span class="label label-danger">Non-disponible</span>';
                                $active = (!$row['Statut']) ? '<span class="pull-right"><a href="#activate" class="status" data-toggle="modal" data-id="'.$row['CodeLivre'].'"><i class="fa fa-check-square-o"></i></a></span>' : '<span class="pull-right"><a href="#desactivate" class="status" data-toggle="modal" data-id="'.$row['CodeLivre'].'"><i class="fa fa-check-square-o"></i></a></span>';
                                ?>
                                <tr>
                                    <td>
                                        <img style="height: 80px; width: 50px;" src="thumbmnail/<?php echo $row['Image']; ?>" />

                                    </td>
                                    <td><?php echo $row['Titre']; ?>
                                    </td>
                                    <td><?php echo $row['Description']; ?></td>
                                    <td><?php echo $row['AuteurPrincipal']; ?></td>
                                    <td><?php echo $row['NombrePage']; ?></td>
                                    <td><?php echo $status; echo $active;?></td>
                                    <td><?php echo $row['Domaine']; ?></td>
                                    <td>
                                        <button class='btn btn-success btn-sm edit btn-flat' data-id="<?php echo $row['CodeLivre'] ?>"><i class='fa fa-edit'></i> </button>
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




