<body class="hold-transition skin-yellow layout-top-nav">
	<div class="wrapper">
		<div class="content-wrapper">
			<div class="container">
				<section class="content">

					<!-- SELECT2 EXAMPLE -->
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title">Data Diri</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<form action="<?php echo site_url('santri/pendaftaran/dataDiri/insertSantri ') ?>" method="post" accept-charset="utf-8">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Nama Lengkap</label>
											<input class="form-control" type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
										</div>
										<div class="col-md-12">
											<?php echo form_error('nama_lengkap', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<label>Nama Panggilan</label>
											<input class="form-control" type="text" name="nama_panggilan" placeholder="Masukkan nama panggilan" required>
										</div>
										<div class="col-md-12">
											<?php echo form_error('nama_panggilan', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<Label>Jenis Kelamin</Label>
											<select name="jenis_kelamin" class="form-control">
												<option>-- Pilih --</option>
												<option value="Perempuan">Perempuan</option>
												<option value="Laki-Laki">Laki-Laki</option>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('jenis_kelamin', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<label>Agama</label>
											<input class="form-control" type="text" name="agama" placeholder="Masukkan agama" required>
										</div>
										<div class="col-md-12">
											<?php echo form_error('agama', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<label>Tempat Lahir</label>
											<input class="form-control" type="text" name="tempat_lahir" placeholder="Masukkan tempat lahir" required>
										</div>
										<div class="col-md-12">
											<?php echo form_error('tempat_lahir', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<label>Tanggal Lahir</label>
											<div class="input-group date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input class="form-control" type="date" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" required>
											</div>
										</div>
										<div class="col-md-12">
											<?php echo form_error('tanggal_lahir', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<label>Anak ke</label>
											<input class="form-control" type="text" name="anak_ke" placeholder="Masukkan anak ke" required>
										</div>
										<div class="col-md-12">
											<?php echo form_error('anak_ke', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<!-- /.col -->
									<div class="col-md-6">
										<div class="form-group">
											<Label>Status Santri</Label>
											<select name="status_santri" class="form-control">
												<option>-- Pilih --</option>
												<option value="MURNI">MURNI</option>
												<option value="IKHD">IKHD</option>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('status_santri', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<label>Alamat Rumah</label>
											<input class="form-control" type="text" name="alamat_rumah" placeholder="Masukkan alamat rumah" required>
										</div>
										<div class="col-md-12">
											<?php echo form_error('alamat_rumah', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<label>Asal Sekolah</label>
											<input class="form-control" type="text" name="asal_sekolah" placeholder="Masukkan asal sekolah" required>
										</div>
										<div class="col-md-12">
											<?php echo form_error('asal_sekolah', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<label>Alamat Asal Sekolah</label>
											<input class="form-control" type="text" name="alamat_sekolah_asal" placeholder="Masukkan alamat asal sekolah" required>
										</div>
										<div class="col-md-12">
											<?php echo form_error('alamat_sekolah_asal', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<Label>Pengalaman Belajar</Label>
											<select name="pengalaman_belajar" class="form-control">
												<option>-- Pilih --</option>
												<option value="SD/MI">SD/MI</option>
												<option value="SMP/MTs">SMP/MTs</option>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('pengalaman_belajar', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<Label>Program Yang Dituju</Label>
											<select name="program_yang_dituju" class="form-control">
												<option>-- Pilih --</option>
												<option value="Reguler 6 Tahun">Reguler 6 Tahun</option>
												<option value="Khusus/Intensive 4 tahun">Khusus/Intensive 4 tahun</option>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('program_yang_dituju', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>
								</div>
								<div class="pull-left hidden-xs">
									<td>
										<a href="<?php echo site_url("santri/pendaftaran/ketentuan/index")  ?>" class="btn btn-block btn-default btn-lg">Kembali</a>
									</td>
								</div>
								<div class="pull-right hidden-xs">
									<td>
										<a href="<?php echo site_url("santri/pendaftaran/dataOrtu/index")  ?>" type="submit" name="" value="Simpan" class="btn btn-block btn-warning btn-lg">Lanjut</a>
									</td>
								</div>
							</form>
						</div>

					</div>

				</section>
			</div>
		</div>
	</div>
</body>
