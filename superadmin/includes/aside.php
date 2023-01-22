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
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
          <li class="header">OUVRAGES</li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-book"></i>
                  <span>Livre</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="newbook"><i class="fa fa-circle-o"></i> Ajouter</a></li>
                  <li><a href="books"><i class="fa fa-circle-o"></i> Liste</a></li>

              </ul>
          </li>

          <li class="treeview">
              <a href="#">
                  <i class="fa fa-book"></i>
                  <span>Article scientifique</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="newtfc"><i class="fa fa-circle-o"></i> Ajouter</a></li>
                  <li><a href="memoire"><i class="fa fa-circle-o"></i> Liste</a></li>

              </ul>
          </li>


          <li class="treeview">
              <a href="#">
                  <i class="fa fa-book"></i>
                  <span>Cours</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="newcours"><i class="fa fa-circle-o"></i> Ajouter</a></li>
                  <li><a href="cours"><i class="fa fa-circle-o"></i> Liste</a></li>

              </ul>
          </li>

          <li class="header">ITEM</li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-pencil"></i>
                  <span>ITEM</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="newitem"><i class="fa fa-circle-o"></i> Ajouter</a></li>
                  <li><a href="item"><i class="fa fa-circle-o"></i> Liste</a></li>

              </ul>
          </li>

          <li class="header">QUESTION DU JOUR</li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-pencil"></i>
                  <span>Question du jour</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="newquestion"><i class="fa fa-circle-o"></i> Ajouter</a></li>
                  <li><a href="question"><i class="fa fa-circle-o"></i> Liste</a></li>
                  <li><a href="question"><i class="fa fa-circle-o"></i> Réaction</a></li>

              </ul>
          </li>

          <li class="header">EMPLOI</li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-building"></i>
                  <span>Offre d'emploi</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="newoffre"><i class="fa fa-circle-o"></i> Ajouter</a></li>
                  <li><a href="offre.php"><i class="fa fa-circle-o"></i> Liste</a></li>

              </ul>
          </li>




          <li class="header">LECTEURS</li>
          <li><a href="lecteur"><i class="fa fa-user"></i> <span>Nos lecteurs</span></a></li>

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
                  <li><a href="superadmin"><i class="fa fa-circle-o"></i> Superadmin</a></li>
                  <li><a href="admin"><i class="fa fa-circle-o"></i> Admin</a></li>
                  <li><a href="domaine"><i class="fa fa-circle-o"></i> Domaine</a></li>
                  <li><a href="faculte"><i class="fa fa-circle-o"></i> Faculte</a></li>
                  <li><a href="option"><i class="fa fa-circle-o"></i> Option</a></li>
                  <li><a href="annee"><i class="fa fa-circle-o"></i> Année academique</a></li>

              </ul>
          </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>