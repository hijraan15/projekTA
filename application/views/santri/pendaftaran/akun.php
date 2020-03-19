<body class="hold-transition skin-yellow layout-top-nav">
	<div class="wrapper">
		<div class="content-wrapper">
			<div class="container">
				<section class="content">

					<!-- SELECT2 EXAMPLE -->
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title">Akun</h3>
						</div>
						<div class="box-body">
							<div class="box-header with-border" align="center">
								Silahkan buat akun terlebih dahulu
							</div>
						</div>
						<!-- /.box-header -->
						<form class="form-horizontal">
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2">Nama Lengkap</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" id="nama_santri" placeholder="Masukkan nama lengkap">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2">Email</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" id="nama_santri" placeholder="Masukkan email">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2">Username</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" id="nama_santri" placeholder="Masukkan username">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2">Password</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" id="nama_santri" placeholder="Masukkan password">
									</div>
								</div>
						</form>
						<div class="box-body" align="center">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										Catatan : Jika sudah dibuat, silahkan login menggunakan akun anda setelah mendaftar.
									</div>
								</div>
							</div>
							<div class="pull-left hidden-xs">
								<td>
									<a href="<?php echo site_url("santri/pendaftaran/persyaratan/index")  ?>" type="button" class="btn btn-block btn-default btn-lg">Kembali</a>
								</td>
							</div>
							<div class="pull-right hidden-xs">
								<td>
									<a href="<?php echo site_url("santri/pendaftaran/konfirmasi/index")  ?>" type="button" class="btn btn-block btn-warning btn-lg">Lanjut</a>
								</td>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</body>
