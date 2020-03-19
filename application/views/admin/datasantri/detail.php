<!DOCTYPE html>
<html>
<?php $this->load->view('admin/templates/head'); ?>

<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/templates/header'); ?>
		<div class="content-wrapper">
			<section class="content">

				<div class="box box-danger">
					<div class="box-header with-border">
						<h4 class="box-title">Detail Data Santri Baru</h4>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-6">
								<!-- /.form-group -->
								<div class="form-group row">
									<label for="inputNama" class="col-sm-5 control-label">Nama Santri</label>
									<div class="col-sm-5">
										<p><?php echo $nama_santri; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputJK" class="col-sm-5 control-label">Jenis Kelamin</label>
									<div class="col-sm-5">
										<p><?php echo $jenis_kelamin; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputAgama" class="col-sm-5 control-label">Agama</label>
									<div class="col-sm-5">
										<p><?php echo $agama; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputTempat/TanggalLahir" class="col-sm-5 control-label">Tempat/TanggalLahir</label>
									<div class="col-sm-5">
										<p><?php echo $tempat_lahir; ?>, <?php echo $tanggal_lahir; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputStatusSantri" class="col-sm-5 control-label">Status Santri</label>
									<div class="col-sm-5">
										<p><?php echo $status_santri; ?></p>
									</div>
								</div>

								<!-- /.form-group -->
							</div>
							<!-- /.col -->
							<div class="col-md-6">
								<!-- /.form-group -->
								<div class="form-group row">
									<label for="inputAlamatRumah" class="col-sm-5 control-label">Alamat Rumah</label>
									<div class="col-sm-5">
										<p><?php echo $alamat_rumah; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputSekolahAsal" class="col-sm-5 control-label">Sekolah Asal</label>
									<div class="col-sm-5">
										<p><?php echo $sekolah_asal; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputAlamatSekolahAsal" class="col-sm-5 control-label">Alamat Sekolah Asal</label>
									<div class="col-sm-5">
										<p><?php echo $alamat_sekolah_asal; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPengalamanBelajar" class="col-sm-5 control-label">Pengalaman Belajar</label>
									<div class="col-sm-5">
										<p><?php echo $pengalaman_belajar; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputProgramYangDituju" class="col-sm-5 control-label">Program Yang Dituju</label>
									<div class="col-sm-5">
										<p><?php echo $program_yang_dituju; ?></p>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
				</div>

				<!--   <div class="box"> -->
				<div class="box box-success">
					<div class="box-header with-border">
						<h4 class="box-title">Detail Data Orang Tua</h4>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="inputNama" class="col-sm-5 control-label">Nama Lengkap Orang Tua</label>
									<div class="col-sm-5">
										<p><?php echo $nama_lengkap_ortu; ?></p>
									</div>
								</div>
								<!-- /.form-group -->
								<div class="form-group row">
									<label for="inputNama" class="col-sm-5 control-label">Pekerjaan Orang Tua</label>
									<div class="col-sm-5">
										<p><?php echo $pekerjaan_ortu; ?></p>
									</div>
								</div>

								<!-- /.form-group -->
							</div>
							<div class="col-md-6">
								<!-- /.form-group -->
								<div class="form-group row">
									<label for="inputNama" class="col-sm-5 control-label">Nomor HP Orang Tua</label>
									<div class="col-sm-5">
										<p><?php echo $hp_ortu; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputNama" class="col-sm-5 control-label">Alamat Rumah Orang Tua</label>
									<div class="col-sm-5">
										<p><?php echo $alamat_rumah_ortu; ?></p>
									</div>
								</div>

								<!-- /.form-group -->
							</div>
						</div>
					</div>
					<div class="box-footer">
						<a href="<?php echo base_url(); ?>index.php/admin/santri" class="btn btn-default">Kembali</a>
					</div>
				</div>
		</div>

		</section>
	</div>
	<?php $this->load->view('admin/templates/footer'); ?>
	<div class="control-sidebar-bg"></div>
	</div>
	<?php $this->load->view('admin/templates/js'); ?>
	<script>
		$(function() {
			$('#santri').DataTable()
		})
	</script>
</body>

</html>
