<?php
include 'includes/sessionoutconnected.php'; 

include("includes/head_login_register.php");
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Congopedia</b></a>
  </div>
  <div class="login-box-body">
      <p class="login-box-msg">Login::Super-admin</p>
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
        <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Connection</button>
        </div>
      </div>
    </form>



  </div>
  <!-- /.login-box-body -->
</div>

<?php
include("includes/script_login_register.php");
?>
</body>
</html>
