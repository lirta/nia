<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo"foto/$_SESSION[foto]"; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo "$_SESSION[username]"; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="arsip/view.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Arsip Akta
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="laporan/view.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Laporan Bulanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="syarat/view.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Syarat Pengajuan Akta
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pengajuan/view.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pengajuan Akta
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>