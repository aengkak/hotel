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
                  <small></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout" class="btn btn-default btn-flat">Sign out</a>
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
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('home');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Customers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('supplier');?>"><i class="fa fa-circle-o"></i> Supplier</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('user');?>"><i class="fa fa-circle-o"></i> User</a></li>
            <li><a href="<?php echo base_url('access');?>"><i class="fa fa-circle-o"></i> Access</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('hotel');?>"><i class="fa fa-circle-o"></i> Hotel</a></li>
            <li><a href="<?php echo base_url('room');?>"><i class="fa fa-circle-o"></i> Room</a></li>
            <li><a href="<?php echo base_url('allotment');?>"><i class="fa fa-circle-o"></i> Allotment</a></li>
            <li><a href="<?php echo base_url('closed');?>"><i class="fa fa-circle-o"></i> Closed</a></li>
            <li><a href="<?php echo base_url('gallery');?>"><i class="fa fa-circle-o"></i> Gallery</a></li>
            <li><a href="<?php echo base_url('calendar');?>"><i class="fa fa-circle-o"></i> Calendar</a></li>
            <li><a href="<?php echo base_url('feature');?>"><i class="fa fa-circle-o"></i> Feature</a></li>
            <li><a href="<?php echo base_url('nearby');?>"><i class="fa fa-circle-o"></i> Nearby</a></li>
            <li><a href="<?php echo base_url('bed');?>"><i class="fa fa-circle-o"></i> Bed</a></li>
            <li><a href="<?php echo base_url('log');?>"><i class="fa fa-circle-o"></i> Log</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>
