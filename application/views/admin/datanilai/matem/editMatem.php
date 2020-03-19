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
						<h4 class="box-title">Edit Nilai Matematika</h4>
					</div>
					<div class="box-body">
						<!-- <div class="col-lg-6 col-lg-offset-3"> -->
						<div class="well bs-component">
							<form action="<?php echo base_url('index.php/admin/matem/UpdateMatem') ?>" method="post" class="form-horizontal">
								<?php if (!empty($data)) : ?>
									<?php echo form_hidden('id_matem', $data->id_matem); ?>
								<?php endif ?>

								<fieldset>
									<div class="form-group">
										<label for="">Nama Santri</label>
										<div class="col-lg-12">
											<select class="form-control" name="nama_santri" id="">
												<option value="<?= $data->id_santri ?>"><?= $data->nama_santri ?></option>
												<?php foreach ($role as $r) : ?>
													<?php if ($r->id_santri !== $data->id_santri) : ?>
														<option value="<?= $r->id_santri ?>"><?= $r->nama_santri ?></option>
													<?php endif	 ?>
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<?php echo form_error('nama_santri', '<span class="text-danger">', '</span>') ?>
									</div>

									<div class="form-group">
										<label for="InputMatem control-label">Nilai Matematika</label>
										<div class="col-lg-12">
											<?php if (!empty($data)) : ?>
												<?php echo form_input([
													'name' => 'nilai_matem',
													'class' => 'form-control',
													'placeholder' => 'Nilai Matematika',
													'value' => set_value('nilai_matem', $data->nilai_matem)
												]); ?>
											<?php else : ?>
												<?php echo form_input([
													'name' => 'nilai_matem',
													'class' => 'form-control',
													'placeholder' => 'Nilai Matematika',
													'value' => set_value('nilai_matem')
												]); ?>
											<?php endif ?>
										</div>
										<div class="col-md-12">
											<?php echo form_error('nilai_matem', '<span class="text-danger">', '</span>') ?>
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
											<a class="btn btn-default" href="<?php echo base_url('index.php/admin/matem') ?>" title="">Kembali</a>
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
			$('#matem').DataTable()
		})
	</script>
</body>

</html>
