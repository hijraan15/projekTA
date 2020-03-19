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
						<h4 class="box-title">Edit Pembayaran</h4>
					</div>
					<div class="box-body">
						<!-- <div class="col-lg-6 col-lg-offset-3"> -->
						<div class="well bs-component">
							<form action="<?php echo base_url('index.php/admin/pembayaran/UpdatePembayaran') ?>" method="post" class="form-horizontal">
								<?php if (!empty($data)) : ?>
									<?php echo form_hidden('id_transaksi', $data->id_transaksi); ?>
								<?php endif ?>

								<fieldset>
									<div class="form-group">
										<label for="InputNama" control-label>Nama Santri</label>
										<div class="col-lg-12">

											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'nama_santri',
													'class' => 'form-control',
													'placeholder' => 'Nama Santri',
													'readonly' => true,
													'value' => set_value('nama_santri', $data->nama_santri)
												]); ?>
												<?php ?>
											<?php endif ?>
										</div>
										<div class="col-md-12">
											<?php echo form_error('nama_santri', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="InputAlamat" control-label>Daerah</label>
										<div class="col-lg-12">

											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'alamat_rumah',
													'class' => 'form-control',
													'placeholder' => 'Nama Santri',
													'readonly' => true,
													'value' => set_value('alamat_rumah', $data->alamat_rumah)
												]); ?>
												<?php ?>
											<?php endif ?>
										</div>
										<div class="col-md-12">
											<?php echo form_error('alamat_rumah', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="InputJK" control-label>Jenis Kelamin</label>
										<div class="col-lg-12">

											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'jenis_kelamin',
													'class' => 'form-control',
													'placeholder' => 'Jenis Kelamin',
													'readonly' => true,
													'value' => set_value('jenis_kelamin', $data->jenis_kelamin)
												]); ?>
												<?php ?>
											<?php endif ?>
										</div>
										<div class="col-md-12">
											<?php echo form_error('jenis_kelamin', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="InputProgram" control-label>Program</label>
										<div class="col-lg-12">

											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'program_yang_dituju',
													'class' => 'form-control',
													'placeholder' => 'Program',
													'readonly' => true,
													'value' => set_value('program_yang_dituju', $data->program_yang_dituju)
												]); ?>
												<?php ?>
											<?php endif ?>
										</div>
										<div class="col-md-12">
											<?php echo form_error('program_yang_dituju', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="InputStatus" control-label>Status Santri</label>
										<div class="col-lg-12">
											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'status_santri',
													'class' => 'form-control',
													'placeholder' => 'Status santri',
													'readonly' => true,
													'value' => set_value('status_santri', $data->status_santri)
												]); ?>
											<?php else : ?>
												<?php echo form_input([
													'name' => 'status_santri',
													'class' => 'form-control',
													'placeholder' => 'Status santri',
													'value' => set_value('status_santri')
												]); ?>
											<?php endif ?>
										</div>
										<div class="col-md-12">
											<?php echo form_error('status_santri', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="InputUangPendaftaran" control-label>Uang Pendaftaran</label>
										<div class="col-lg-12">
											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'uang_pendaftaran',
													'class' => 'form-control',
													'placeholder' => 'Uang Pendaftaran',
													'value' => set_value('uang_pendaftaran', $data->uang_pendaftaran)
												]); ?>
											<?php else : ?>
												<?php echo form_input([
													'name' => 'uang_pendaftaran',
													'class' => 'form-control',
													'placeholder' => 'Uang Pendaftaran',
													'value' => set_value('uang_pendaftaran')
												]); ?>
											<?php endif ?>
										</div>
										<div class="col-md-12">
											<?php echo form_error('uang_pendaftaran', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="InputKet" control-label>Keterangan</label>
										<div class="col-lg-12">
											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'ket',
													'class' => 'form-control',
													'placeholder' => 'Keterangan',
													'value' => set_value('ket', $data->ket)
												]); ?>
											<?php else : ?>
												<?php echo form_input([
													'name' => 'ket',
													'class' => 'form-control',
													'placeholder' => 'Keterangan',
													'value' => set_value('ket')
												]); ?>
											<?php endif ?>
										</div>
										<div class="col-md-12">
											<?php echo form_error('ket', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-lg-12 col-lg-3"><br>
											<a class="btn btn-default" href="<?php echo base_url('index.php/admin/pembayaran') ?>" title="">Kembali</a>
											<button type="submit" class="btn btn-primary">Ubah</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<!-- </div> -->
					</div>
				</div>
		</div>
		</form>
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
			$('#pembayaran').DataTable()
		})
	</script>
</body>

</html>
