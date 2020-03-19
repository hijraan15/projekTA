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
						<h4 class="box-title">Edit Data Santri</h4>
					</div>
					<div class="box-body">
						<!-- <div class="col-lg-6 col-lg-offset-3"> -->
						<div class="well bs-component">
							<form action="<?php echo base_url('index.php/admin/santri/UpdateSantri') ?>" method="post" class="form-horizontal">
								<?php if (!empty($data)) : ?>
									<?php echo form_hidden('id_santri', $data->id_santri); ?>
								<?php endif ?>

								<fieldset>
									<div class="form-group">
										<label for="InputNama" control-label>Nama Lengkap</label>
										<div class="col-lg-12">

											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'nama_santri',
													'class' => 'form-control',
													'placeholder' => 'Nama Lengkap',
													'value' => set_value('nama_santri', $data->nama_santri)
												]); ?>
											<?php else : ?>

												<?php echo form_input([
													'name' => 'nama_santri',
													'class' => 'form-control',
													'placeholder' => 'Nama Lengkap',
													'value' => set_value('nama_santri')
												]); ?>
											<?php endif ?>

										</div>
										<div class="col-md-12">
											<?php echo form_error('nama_santri', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="select" control-label">Jenis Kelamin</label>
										<div class="col-lg-12">
											<select name="jenis_kelamin" class="form-control">
												<option value="<?php echo $data->jenis_kelamin; ?>"><?php echo $data->jenis_kelamin; ?></option>
												<option value="Perempuan">Perempuan</option>
												<option value="Laki-Laki">Laki-Laki</option>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('jenis_kelamin', '<span class="text-danger>', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="select" control-label">Status Santri</label>
										<div class="col-lg-12">
											<select name="status_santri" class="form-control">
												<option value="<?php echo $data->status_santri; ?>"><?php echo $data->status_santri; ?></option>
												<option value="MURNI">MURNI</option>
												<option value="IKHD">IKHD</option>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('status_santri', '<span class="text-danger>', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="InputAlamat" control-label>Alamat Rumah</label>
										<div class="col-lg-12">

											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'alamat_rumah',
													'class' => 'form-control',
													'placeholder' => 'Alamat Rumah',
													'value' => set_value('alamat_rumah', $data->alamat_rumah)
												]); ?>
											<?php else : ?>

												<?php echo form_input([
													'name' => 'alamat_rumah',
													'class' => 'form-control',
													'placeholder' => 'Alamat Rumah',
													'value' => set_value('alamat_rumah')
												]); ?>
											<?php endif ?>

										</div>
										<div class="col-md-12">
											<?php echo form_error('alamat_rumah', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="select" control-label">Program</label>
										<div class="col-lg-12">
											<select name="program_yang_dituju" class="form-control">
												<option value="<?php echo $data->program_yang_dituju; ?>"><?php echo $data->program_yang_dituju; ?></option>
												<option value="Reguer">Reguler</option>
												<option value="Intensive">Intensive</option>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('program_yang_dituju', '<span class="text-danger>', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-lg-12 col-lg-3"><br>
											<a class="btn btn-default" href="<?php echo base_url('index.php/admin/santri') ?>" title="">Kembali</a>
											<button type="submit" class="btn btn-primary">Ubah</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
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
