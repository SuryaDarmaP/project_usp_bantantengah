<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center " href="<?php echo base_url('administrator/dashboard')?>">
        <div class="sidebar-brand-icon">
          <i> <img class="img-profile" src="<?php echo base_url() ?>assets/img/usp1.png" width="60%"  > </i>
        </div>
        <div class="sidebar-brand-text mx-1">USP - BANTAN</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <!-- <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('administrator/user_dashboard')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li> -->

      <!-- Divider 
      <hr class="sidebar-divider">-->

      <!-- Heading 
      <div class="sidebar-heading">
        Interface
      </div>-->

      <!-- Nav Item - Pages Collapse Menu -->
      <?php if($level == "Nasabah"){ ?>
        
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('administrator/dashboard')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading text-white">
                Menu Nasabah
            </div>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('administrator/nasabah/pengajuan') ?>">
            <i class="fas fa-id-card-alt"></i>
            <span>Form Pengajuan</span></a>
        </li>

        <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('administrator/nasabah/hasil_pengajuan') ?>">
                <i class="fas fa-users"></i>
                <span>Hasil Pengajuan</span></a>
        </li>

        <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('administrator/user/profil') ?>">
                <i class="far fa-user"></i>
                <span>Akun</span></a>
          </li>

      <?php } ?>



      <?php if($level == "Staff SAK"){ ?>
        
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('administrator/dashboard')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading text-white">
                Menu STAFF SAK
            </div>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('administrator/staff/pengajuan') ?>">
            <i class="fas fa-id-card-alt"></i>
            <span>Daftar Pengajuan</span></a>
        </li>

        <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('administrator/staff/hasil_survei') ?>">
                <i class="fas fa-users"></i>
                <span>Hasil Survei</span></a>
        </li>

        <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('administrator/user/profil') ?>">
                <i class="far fa-user"></i>
                <span>Akun</span></a>
          </li>

      <?php } ?>


      <?php if($level == "Analisis Kredit"){ ?>
        
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('administrator/dashboard')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading text-white">
                Menu Analisis Kredit
            </div>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-id-card-alt"></i>
            <span>Daftar Pengajuan</span></a>
        </li>

        <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-users"></i>
                <span>Hasil Survei Pengajuan</span></a>
        </li>

        <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('administrator/user/profil') ?>">
                <i class="far fa-user"></i>
                <span>Akun</span></a>
          </li>

      <?php } ?>

      <!-- Nav Item - Utilities Collapse Menu -->



      <?php if($level == "Admin"){ ?>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('administrator/dashboard')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading text-white">
                Menu Admin
            </div>

      <!--<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-university"></i>
          <span>Data Siswa</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('administrator/siswa') ?>">Siswa</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>-->

      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('administrator/admin/pengajuan') ?>">
            <i class="fas fa-id-card-alt"></i>
            <span>Daftar Pengajuan</span></a>
      </li>

     <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('administrator/admin/hasil_pengajuan') ?>">
            <i class="fas fa-users"></i>
            <span>Hasil Pengajuan</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-calculator"></i>
            <span>Hasil Penghitungan</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('administrator/user/profil') ?>">
            <i class="far fa-user"></i>
            <span>Akun</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('administrator/user') ?>">
            <i class="fa fa-address-book"></i>
            <span>User</span></a>
      </li>

      <?php } ?>


      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('administrator/auth/logout')?>">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>
          <span>Logout</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
          
            <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline small text-capitalize">
                                <?php echo $username;?>
                                </span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url() ?>assets/img/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-success" href="<?php echo base_url('administrator/auth/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>