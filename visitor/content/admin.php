<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-weight: bold;">
            Administrateur
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Administrateur</li>
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
                        <a href="#addadmin" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nouveau</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Crée le</th>
                                <th>Dernière connection</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM t_superadmin WHERE CodeCategorie=2";
                            $req = $app->fetchPrepared($sql);
                            foreach($req as $row){
                                ?>
                                <tr>
                                    <td><?php echo $row['NomComplet']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $app->dateconv($row['Created_on']); ?></td>
                                    <td><?php echo $app->dateconv($row['Last_connection']); ?></td>
                                    <td>
                                        <button class='btn btn-success btn-sm edit btn-flat' data-id="<?php echo $row['CodeSuper'] ?>"><i class='fa fa-edit'></i> </button>
                                        <button class='btn btn-danger btn-sm delete btn-flat' data-id="<?php echo $row['CodeSuper'] ?>"><i class='fa fa-trash'></i> </button>
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




