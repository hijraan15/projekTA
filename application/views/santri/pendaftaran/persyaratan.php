<body class="hold-transition skin-yellow layout-top-nav">
	<div class="wrapper">
		<div class="content-wrapper">
			<div class="container">
				<!-- Content Header (Page header) -->


				<!-- Main content -->
				<section class="content">

					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title">Persyaratan</h3>
						</div>
						<div class="box-body">
							<div class="box-header with-border" align="center">
								Download persyaratan dibawah ini sesuai dengan status santri anda
							</div>
						</div>
						<div class="box-body">
							<div class="box-header with-border" align="center">
								Jika anda santri MURNI. Silahkan download berkas dibawah ini:
							</div>
						</div>
						<div class="box-body">
							<!-- <?php var_dump($persyaratan) ?> -->
							<?php if (!empty($persyaratan)) {
								foreach ($persyaratan as $frow) { ?>
									<div class="file-box">
										<div class="box-content">
											<!-- <h5><?php echo $frow['title']; ?></h5> -->
											<div class="preview">
												<embed src="<?php echo base_url() . 'uploads/files/' . $frow['file_name']; ?>">
											</div>
											<a href="<?php echo site_url() . '/santri/pendaftaran/persyaratan/download/' . $frow['id']; ?>" class="btn btn-primary">Download</a>
										</div>
									</div>
							<?php }
							} ?>
							<!-- <div class="box-header with-border" align="center">
								<td>
									<button type=" button" class="btn btn-primary btn-lg">Surat Permohonan Santri MURNI</button>
									<button type=" button" class="btn btn-primary btn-lg">Surat Pernyataan Wali Santri MURNI</button>
								</td>
							</div> -->
						</div>
						<div class="box-body">
							<div class="box-header with-border" align="center">
								Jika anda santri IKHD. Silahkan download berkas dibawah ini:
							</div>
						</div>
						<div class="box-body">

							<div class="box-header with-border" align="center">
								<td>
									<button type=" button" class="btn btn-primary btn-lg">Surat Permohonan Santri IKHD</button>
									<button type=" button" class="btn btn-primary btn-lg">Surat Pernyataan Wali Santri IKHD</button>
								</td>
							</div>
						</div>
						<div class="box box-default">
							<div class="box-header with-border">
								<h3 class="box-title">Catatan</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											Jika sudah di download, silahkan diisi dan tandatangan diatas materai. Kemudian dibawa ketika test.
										</div>
									</div>
								</div>
								<div class="pull-left hidden-xs">
									<td>
										<a href="<?php echo site_url("santri/pendaftaran/dataOrtu/index")  ?>" type="button" class="btn btn-block btn-default btn-lg">Kembali</a>
									</td>
								</div>
								<div class="pull-right hidden-xs">
									<td>
										<a href="<?php echo site_url("santri/pendaftaran/akun/index")  ?>" type="button" class="btn btn-block btn-warning btn-lg">Lanjut</a>
									</td>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</body>
