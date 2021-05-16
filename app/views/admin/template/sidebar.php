
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=  BASEURL ?>assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sound ADM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=  BASEURL ?>assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['admin']['fullname'] ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview<?php echo ($data['state'] == 'lb' || $data['state'] == 'iudb' || $data['state'] == 'iukdb' || $data['state'] == 'lkb') ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?php echo ($data['state'] == 'lb' || $data['state'] == 'iudb' || $data['state'] == 'iukdb' || $data['state'] == 'lkb') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Berita
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASEURL ?>admin/listberita" class="nav-link <?php echo ($data['state'] == 'lb') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL ?>admin/inputupdateberita" class="nav-link <?php echo ($data['state'] == 'iudb') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL ?>admin/listkategoriberita" class="nav-link <?php echo ($data['state'] == 'lkb') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Kategori Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL ?>admin/inputupdatekategoriberita" class="nav-link <?php echo ($data['state'] == 'iukdb') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Kategori Berita</p>
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
       <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview<?php echo ($data['state'] == 'lk' || $data['state'] == 'iudk' || $data['state'] == 'lkj' || $data['state'] == 'iudkj' || $data['state'] == 'lj' || $data['state'] == 'iudj') ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?php echo ($data['state'] == 'lk' || $data['state'] == 'iudk' || $data['state'] == 'lkj' || $data['state'] == 'iudkj' || $data['state'] == 'lj' || $data['state'] == 'iudj') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Karyawan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASEURL ?>admin/listkaryawan" class="nav-link <?php echo ($data['state'] == 'lk') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL ?>admin/inputupdatekaryawan" class="nav-link <?php echo ($data['state'] == 'iudk') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL ?>admin/listjabatan" class="nav-link <?php echo ($data['state'] == 'lj') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL ?>admin/inputupdatejabatan" class="nav-link <?php echo ($data['state'] == 'iudj') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Jabatan</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= BASEURL ?>admin/listkategorijabatan" class="nav-link <?php echo ($data['state'] == 'lkj') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Kategori Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL ?>admin/inputupdatekategorijabatan" class="nav-link <?php echo ($data['state'] == 'iudkj') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Kategori Jabatan</p>
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
     
    </div>
    <!-- /.sidebar -->
  </aside>
