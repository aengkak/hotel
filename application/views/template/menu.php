<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Web</b>4</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Web</b>4</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		<!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/dist/img/user.png');?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/dist/img/user.png');?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('username'); ?>
                  <small><a href="#" onclick="modalprof()" class="btn btn-primary btn-flat">Ubah Profil</a></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">

                  <a href="#" onclick="pass()" class="btn btn-default btn-flat">Ubah Sandi</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url();?>logout" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/dist/img/user.png');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu utama</li>
        <li>
          <a href="<?php echo base_url('home');?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php $akses_id = $this->session->userdata('akses_id');
            $level = $this->session->userdata('level');
            $supplier_id = $this->session->userdata('supplier_id');
            $res1 = explode(',',$akses_id);
            if ($level == "supplier") {
              if ($supplier_id <= 0) { ?>
                <li><a href="<?php echo base_url();?>hotel"><i class="fa fa-circle-o"></i>Hotel</a></li>
          <?php } else {
            foreach ($akses as $key) {
              foreach ($res1 as $keya => $value) {
                if ($value == $key->id_akses) {?>
                  <li><a href="<?php echo base_url().strtolower($key->akses);?>"><i class="fa fa-circle-o"></i><?php echo ucfirst($key->akses) ;?></a></li>
              <?php }
              }
             }
          }
        } elseif ($level == "staff") {
          foreach ($akses as $key) {
            foreach ($res1 as $keya => $value) {
              if ($value == $key->id_akses) {?>
                <li><a href="<?php echo base_url().strtolower($key->akses);?>"><i class="fa fa-circle-o"></i><?php echo ucfirst($key->akses) ;?></a></li>
            <?php }
            }
           }
        } ?>

          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>
