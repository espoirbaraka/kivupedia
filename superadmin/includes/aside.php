 <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($req['Photo'])) ? 'img/'.$req['Photo'] : 'img/user.png'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $req['NomComplet']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">GENERAL</li>
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
          <li class="header">MEDICAMENT</li>
          <li><a href="article.php"><i class="fa fa-thermometer"></i> <span>Articles</span></a></li>

          <li class="header">CLIENT</li>
          <li><a href="client.php"><i class="fa fa-user"></i> <span>Client</span></a></li>
          <li><a href="ordonnance.php"><i class="fa fa-send"></i> <span>Ordonnance</span></a></li>
          <li><a href="commande.php"><i class="fa fa-list"></i> <span>Commande</span></a></li>
          <li><a href="vente.php"><i class="fa fa-money"></i> <span>Vente</span></a></li>


          <li class="header">PARAMETRES</li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-cogs"></i>
                  <span>Paramètre</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="medecin.php"><i class="fa fa-circle-o"></i> Medecin</a></li>
                  <li><a href="user.php"><i class="fa fa-circle-o"></i> Utilisateur</a></li>
                  <li><a href="fournisseur.php"><i class="fa fa-circle-o"></i> Fournisseur</a></li>

              </ul>
          </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>