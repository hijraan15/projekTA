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
						<img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">Santri
						<span class="hidden-xs"> <?php echo $this->session->userdata('nama_user'); ?></span>
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
				<a>Santri</a>
			</div>
		</div>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MENU UTAMA</li>
			<li><a href="<?php echo base_url(); ?>index.php/santri/akun/home">
					<i class="fa fa-dashboard"></i><span>Home</span></a></li>
			<li><a href="<?php echo base_url(); ?>index.php/santri/akun/pengumuman">
					<i class="fa fa-user"></i><span>Pengumuman</span></a></li>
			<li><a href="<?php echo base_url(); ?>index.php/santri/akun/biodata">
					<i class="fa fa-list"></i><span>Biodata Pendaftaran</span></a></li>
			<li><a href="<?php echo base_url(); ?>index.php/santri/akun/cetakBukti">
					<i class="fa fa-list"></i><span>Cetak Bukti Pendaftaran</span></a></li>
			<li><a href="<?php echo base_url(); ?>index.php/santri/akun/uploadBukti">
		</ul>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">LAINNYA</li>
			<li><a href="<?php echo base_url(); ?>index.php/santri/akun/uploadBukti">
					<i class="fa fa-dashboard"></i><span>Upload Bukti Pembayaran</span></a></li>
			<li><a href="<?php echo base_url(); ?>index.php/santri/akun/registrasi">
					<i class="fa fa-user"></i><span>Registrasi</span></a></li>
		</ul>

	</section>
	<!-- /.sidebar -->
</aside>
