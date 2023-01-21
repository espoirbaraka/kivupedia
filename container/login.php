<div class="single-channel" style="background-color: #d2d6de; padding: 80px 0px 80px 0px;">
    <div class="container">

        <div class="form-signin" style="background: #ffffff; padding: 20px; border-top: 0; color: #666;">
            <div class="login-logo" style="text-align: center">
                <h3 style="color: #0d6aad"><b>Connection</b></h3>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg" style="text-align: center;">Accedez à votre tableau de bord</p>
                <?php
                if(isset($_SESSION['error'])){
                    echo "
                                        <p style='color: red; text-align: center;'>".$_SESSION['error']."</p> 
                                    
                                    ";
                    unset($_SESSION['error']);
                }
                ?>
                <form action="verify.php" method="POST">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control"
                               placeholder="Adresse mail" name="email" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Mot de passe" name="password" autocomplete="off" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Se connecter</button>
                        </div>
                    </div>
                </form>

                <br>
                <p class="login-box-msg">Vous n'avez pas un compte? <a href="register">Inscrivez-vous ici</a></p>


            </div>
            <!-- /.login-box-body -->
        </div>




    </div>
</div>