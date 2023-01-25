<?php
$day = $_GET['day'];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-weight: bold;">
            Poser le questionnaire du <?php echo $app->dateconv($day) ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> Acceuil</a></li>
            <li class="active">Poser le questionnaire <?php echo $app->dateconv($day) ?></li>
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

                <form action="" method="POST">
                    <?php
                    for($j=1; $j<=5; $j++){
                        ?>
                        <div class="box" >


                            <div class="box-header with-border">
                                <h4 class="box-title" style="font-weight: bold">QUESTION <?php echo $j; ?></h4>
                            </div>


                            <div class="box-body">

                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Question <span style="color: red;">*</span></label>
                                            <textarea class="textarea" name="description" style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                        </textarea>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Réponse 1 <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="reponse" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Réponse 2 <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="reponse" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Réponse 3 <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="reponse" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Réponse 4 <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="reponse" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Réponse 5 <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="reponse" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Cochez la bonne reponse <span style="color: red;">*</span></label>
                                            <select class="form-control" name="bn_reponse" required>
                                                <option>-- Choissessez une assertion --</option>
                                                <?php
                                                for($i=1; $i<=5; $i++)
                                                {
                                                    ?>
                                                    <option value="<?php echo $i; ?>">Assertion <?php echo $i; ?></option>
                                                    <?php
                                                }
                                                ?>

                                            </select>
                                        </div>

                                    </div>

                                </div>




                            </div>

                        </div>
                        <?php
                    }
                    ?>
                </form>

                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>




