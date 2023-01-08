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

          <li class="header">QUESTIONNAIRES</li>
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
          <li class="header">LECTEURS</li>
          <li><a href="lecteur"><i class="fa fa-user"></i> <span>Nos lecteurs</span></a></li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>