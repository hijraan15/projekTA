<body class="hold-transition skin-yellow layout-top-nav">
	<div class="wrapper">
		<div class="content-wrapper">
			<div class="container">
				<section class="content">

					<!-- SELECT2 EXAMPLE -->
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title">Data Ayah</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#AddMURNI">Santri Non Yatim
										</a>
										<a href="" class="btn btn-primary" data-toggle="modal" data-target="#AddIKHD">Santri Yatim
										</a>
										<div class="box box-default">
											<div class="box-header with-border">
												<h3 class="box-title">Catatan</h3>
											</div>
											<!-- /.box-header -->
											<div class="box-body">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															1. Jika status santri anda MURNI, silahkan isi data ayah dan ibu.
														</div>
														<div class="form-group">
															2. Jika status santri anda IKHD, silahkan isi data wali dan kosongkan data ayah dan ibu.
														</div>
													</div>
												</div>
												<div class="pull-left hidden-xs">
													<td>
														<a href="<?php echo site_url("santri/pendaftaran/dataDiri/index")  ?>" type="button" class="btn btn-block btn-default btn-lg">Kembali</a>
													</td>
												</div>
												<div class="pull-right hidden-xs">
													<td>
														<a href="<?php echo site_url("santri/pendaftaran/persyaratan/index")  ?>" type="button" class="btn btn-block btn-warning btn-lg">Lanjut</a>
													</td>
												</div>
											</div>
										</div>
										<div id="AddMURNI" class="modal fade">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<div class="modal-title">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h3 align="center">Santri Non Yatim</h3>
														</div>
													</div>
													<div class="modal-body">
														<h5 text-align="center">Data Ayah</h5>
														<form action="<?php echo site_url('santri/pendaftaran/dataOrtu/insertdataOrtu ') ?>" method="post" accept-charset="utf-8">
															<div class="col-md-6">
																<div class="form-group">
																	<label>Nama Lengkap</label>
																	<input class="form-control" type="text" name="nama_ayah" placeholder="Masukkan nama lengkap" required>
																</div>
																<div class="col-md-12">
																	<?php echo form_error('nama_santri', '<span class="text-danger">', '</span>') ?>
																</div>
																<div class="form-group">
																	<label>Pekerjaan</label>
																	<input class="form-control" type="text" name="pekerjaan_ayah" placeholder="Masukkan pekerjaan" required>
																</div>
																<div class="col-md-12">
																	<?php echo form_error('pekerjaan_ayah', '<span class="text-danger">', '</span>') ?>
																</div>
															</div>


															<div class="col-md-6">
																<div class="form-group">
																	<label>Nomor Telephone/HP</label>
																	<input class="form-control" type="text" name="hp_ayah" placeholder="Masukkan nomor hp" required>
																</div>
																<div class="col-md-12">
																	<?php echo form_error('hp_ayah', '<span class="text-danger">', '</span>') ?>
																</div>

																<div class="form-group">
																	<label>Alamat Rumah</label>
																	<input class="form-control" type="text" name="alamat_ayah" placeholder="Masukkan nomor hp" required>
																</div>
																<div class="col-md-12">
																	<?php echo form_error('alamat_ayah', '<span class="text-danger">', '</span>') ?>
																</div>
															</div>
															<h5 text-align="center">Data Ibu</h5>
															<div class="col-md-6">
																<div class="form-group">
																	<label>Nama Lengkap</label>
																	<input class="form-control" type="text" name="nama_ibu" placeholder="Masukkan nama lengkap" required>
																</div>
																<div class="col-md-12">
																	<?php echo form_error('nama_ibu', '<span class="text-danger">', '</span>') ?>
																</div>
																<div class="form-group">
																	<label>Pekerjaan</label>
																	<input type="text" class="form-control" id="nama_panggilan" placeholder="Masukkan pekerjaan">
																</div>
																<div class="col-md-12">
																	<?php echo form_error('nama_panggilan', '<span class="text-danger">', '</span>') ?>
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label>Nomor Telephone/HP</label>
																	<input class="form-control" type="text" name="hp_ibu" placeholder="Masukkan nomor hp" required>
																</div>
																<div class="col-md-12">
																	<?php echo form_error('hp_ibu', '<span class="text-danger">', '</span>') ?>
																</div>
																<div class="form-group">
																	<label>Alamat Rumah</label>
																	<input class="form-control" type="text" name="alamat_rumah" placeholder="Masukkan alamat rumah" required>
																</div>
																<div class="col-md-12">
																	<?php echo form_error('alamat_rumah', '<span class="text-danger">', '</span>') ?>
																</div>
															</div>

															<div class="form-group">
																<input class="btn btn-default" type="button" value="Batal" data-dismiss="modal">
																<input class="btn btn-primary" type="submit" name="" value="Simpan">
															</div>

														</form>
													</div>
												</div>
											</div>
										</div>
										<div id="AddIKHD" class="modal fade">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<div class="modal-title">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h3 align="center">Santri Yatim</h3>
														</div>
													</div>
													<div class="modal-body">
														<form action="<?php echo site_url('santri/pendaftaran/dataOrtu/insertDataWali ') ?>" method="post" accept-charset="utf-8">
															<div class="col-md-6">
																<div class="form-group">
																	<label>Nama Lengkap</label>
																	<input class="form-control" type="text" name="nama_wali" placeholder="Masukkan alamat rumah" required>
																</div>
																<div class="col-md-12">
																	<?php echo form_error('nama_wali', '<span class="text-danger">', '</span>') ?>
																</div>
																<div class="form-group">
																	<label>Pekerjaan</label>
																	<input class="form-control" type="text" name="pekerjaan_wali" placeholder="Masukkan alamat rumah" required>
																</div>
																<div class="col-md-12">
																	<?php echo form_error('pekerjaan_wali', '<span class="text-danger">', '</span>') ?>
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label>Nomor Telephone/HP</label>
																	<input class="form-control" type="text" name="hp_wali" placeholder="Masukkan nomor hp" required>
																</div>
																<div class="col-md-12">
																	<?php echo form_error('hp_wali', '<span class="text-danger">', '</span>') ?>
																</div>

																<div class="form-group">
																	<label>Alamat Rumah</label>
																	<input class="form-control" type="text" name="alamat_wali" placeholder="Masukkan alamat" required>
																</div>
																<div class="col-md-12">
																	<?php echo form_error('alamat_wali', '<span class="text-danger">', '</span>') ?>
																</div>
															</div>

															<div class="form-group">
																<input class="btn btn-default" type="button" value="Batal" data-dismiss="modal">
																<input class="btn btn-primary" type="submit" name="" value="Simpan">
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</body>
