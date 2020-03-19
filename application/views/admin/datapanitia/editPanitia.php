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
						<h4 class="box-title">Edit Data Panitia</h4>
					</div>
					<div class="box-body">
						<!-- <div class="col-lg-6 col-lg-offset-3"> -->
						<div class="well bs-component">
							<form action="<?php echo base_url('index.php/admin/panitia/UpdatePanitia') ?>" method="post" class="form-horizontal">
								<?php if (!empty($data)) : ?>
									<?php echo form_hidden('id_panitia', $data->id_panitia); ?>
								<?php endif ?>

								<fieldset>
									<div class="form-group">
										<label for="InputNama" control-label>Nama Panitia</label>
										<div class="col-lg-12">

											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'nama_panitia',
													'class' => 'form-control',
													'placeholder' => 'Nama Panitia',
													'value' => set_value('nama_panitia', $data->nama_panitia)
												]); ?>
											<?php else : ?>
												<?php echo form_input([
													'name' => 'nama_panitia',
													'class' => 'form-control',
													'placeholder' => 'Nama Lengkap',
													'value' => set_value('nama_panitia')
												]); ?>
											<?php endif ?>
										</div>
										<div class="col-md-12">
											<?php echo form_error('nama_panitia', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="">Jenis Panitia</label>
										<select class="form-control" name="nama_role" id="">
											<option value="<?= $data->id_role ?>"><?= $data->nama_role ?></option>
											<?php foreach ($role as $r) : ?>
												<?php if ($r->id_role !== $data->id_role) : ?>
													<option value="<?= $r->id_role ?>"><?= $r->nama_role ?></option>
												<?php endif	 ?>
											<?php endforeach ?>
										</select>
									</div>
									<div class="col-md-12">
										<?php echo form_error('nama_role', '<span class="text-danger">', '</span>') ?>
									</div>

									<div class="form-group">
										<label for="InputRuangan" control-label>Ruangan</label>
										<div class="col-lg-12">
											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'ruangan',
													'class' => 'form-control',
													'placeholder' => 'Ruangan',
													'value' => set_value('ruangan', $data->ruangan)
												]); ?>
											<?php else : ?>
												<?php echo form_input([
													'name' => 'ruangan',
													'class' => 'form-control',
													'placeholder' => 'Ruangan',
													'value' => set_value('ruangan')
												]); ?>
											<?php endif ?>
										</div>
										<div class="col-md-12">
											<?php echo form_error('ruangan', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="InputUsername" control-label>Username</label>
										<div class="col-lg-12">
											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'username',
													'class' => 'form-control',
													'placeholder' => 'Username',
													'value' => set_value('username', $data->username)
												]); ?>
											<?php else : ?>
												<?php echo form_input([
													'name' => 'username',
													'class' => 'form-control',
													'placeholder' => 'Username',
													'value' => set_value('username')
												]); ?>
											<?php endif ?>
										</div>
										<div class="col-md-12">
											<?php echo form_error('username', '<span class="text-danger">', '</span>') ?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-lg-12 col-lg-3"><br>
											<a class="btn btn-default" href="<?php echo base_url('index.php/admin/panitia') ?>" title="">Kembali</a>
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
			$('#panitia').DataTable()
		})
	</script>
</body>

</html>
