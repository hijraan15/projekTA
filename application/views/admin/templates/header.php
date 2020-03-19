<?php include 'head.php'; ?>
<header class="main-header">
	<!-- Logo -->
	<a href="<?php echo base_url(); ?>assets/index2.html" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>A</b>LT</span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>Jauhar PSB</b></span>
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
						<img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">Administrator
					</a>

				</li>
				<!-- Control Sidebar Toggle Button -->
				<li>
					<a href="<?php echo site_url('Welcome/logout') ?>"><i class="fa fa-sign-out"></i><span class="hidden-xs">Log Out</span></a>
				</li>
			</ul>
		</div>
	</nav>
</header>

<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url(); ?>assets/dist/img/logo smadp.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p> Selamat Datang</p>
				<a>Administrator</a>
			</div>
		</div>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li><a href="<?php echo base_url(); ?>index.php/admin/home">
					<i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
			<li><a href="<?php echo base_url(); ?>index.php/admin/santri">
					<i class="fa fa-user"></i><span>Data Santri</span></a></li>

			<li class="treeview">
				<a href="#">
					<i class="fa fa-file"></i> <span>Data Nilai</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url(); ?>index.php/admin/matem"><i class="fa fa-circle-o"></i>Tes Matematika</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/admin/iqro"><i class="fa fa-circle-o"></i>Tes Baca Iqro'</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/admin/wawancara"><i class="fa fa-circle-o"></i>Hasil Wawancara</a></li>
				</ul>
			</li>

			<li><a href="<?php echo base_url(); ?>index.php/admin/panitia">
					<i class="fa fa-user"></i><span>Data Panitia</span></a></li>
			<li><a href="<?php echo base_url(); ?>index.php/admin/pembayaran">
					<i class="fa fa-list"></i><span>Data Pembayaran</span></a></li>

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
