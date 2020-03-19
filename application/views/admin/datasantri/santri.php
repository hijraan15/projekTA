<!DOCTYPE html>
<html>
<?php $this->load->view('admin/templates/head'); ?>

<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/templates/header'); ?>
		<div class="content-wrapper">
			<section class="content">
				<div class="box">
					<div class="box-header with-border">
						<h1 class="box-title">Data Santri</h1>
					</div>
					<div class="box-body">
						<?php if ($pesan = $this->session->flashdata('pesan')) : ?>
							<div class="row">
								<div class="col-md-12" text-align="center">
									<div class="alert alert-success" role="alert">
										<span class="fa fa-success" aria-hidden="true"></span>
										<span class="sr-only">success:</span>
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<?php echo $pesan; ?>
									</div>
								</div>
							</div>
						<?php endif	?>
						<?php if ($pesan = $this->session->flashdata('edit_santri')) : ?>
							<div class="row">
								<div class="col-md-12" text-align="center">
									<div class="alert alert-success" role="alert">
										<span class="fa fa-success" aria-hidden="true"></span>
										<span class="sr-only">success:</span>
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<?php echo $pesan; ?>
									</div>
								</div>
							</div>
						<?php endif	?>
						<a href="" class="btn btn-primary" data-toggle="modal" data-target="#AddModal"><i class="fa fa-plus"></i> Tambah Data
						</a>
						<br><br>

						<table id="santri" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Lengkap</th>
									<th>Jenis Kelamin</th>
									<th>Status</th>
									<th>Alamat Rumah</th>
									<th>Program</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<?php
							$no = 1;
							if ($data->num_rows() > 0) {
								foreach ($data->result() as $row) {
							?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row->nama_santri ?></td>
										<td><?php echo $row->jenis_kelamin ?></td>
										<td><?php echo $row->status_santri ?></td>
										<td><?php echo $row->alamat_rumah ?></td>
										<td><?php echo $row->program_yang_dituju ?></td>

										<td>
											<a href="<?php echo site_url("admin/santri/editSantri/{$row->id_santri}")  ?>" data-toggle="tooltip" data-placement="bottom" title="Ubah Santri" class="btn btn-warning">Ubah</a>
											<a onclick="return confirm('Yakin data ingin dihapus??')" href="<?php echo site_url("admin/santri/deleteSantri/{$row->id_santri}")  ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus Santri" class="btn btn-danger">Delete</a>
										</td>
									</tr>
							<?php

								}
							}
							?>
						</table>
					</div>

					<div id="AddModal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<div class="modal-title">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h1 text-align="center">Tambah Data</h1>
									</div>
								</div>
								<div class="modal-body">
									<form action="<?php echo site_url('admin/santri/insertSantri ') ?>" method="post" accept-charset="utf-8">
										<div class="form-group">
											<Label>Nama Lengkap</Label>
											<input class="form-control" type="text" name="nama_santri" placeholder="Masukkan nama anda" required="">
										</div>
										<div class="col-md-12">
											<?php echo form_error('nama_santri', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<Label>Jenis Kelamin</Label>
											<select name="jenis_kelamin" class="form-control">
												<option value="Perempuan">Perempuan</option>
												<option value="Laki-Laki">Laki-Laki</option>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('jenis_kelamin', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<Label>Status</Label>
											<input class="form-control" type="text" name="status_santri" placeholder="Masukkan nama anda" required="">
										</div>
										<div class="col-md-12">
											<?php echo form_error('status_santri', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<Label>Alamat Rumah</Label>
											<input class="form-control" type="text" name="alamat_rumah" placeholder="Masukkan nama anda" required="">
										</div>
										<div class="col-md-12">
											<?php echo form_error('alamat_rumah', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<Label>Program</Label>
											<input class="form-control" type="text" name="program_yang_dituju" placeholder="Masukkan nama anda" required="">
										</div>
										<div class="col-md-12">
											<?php echo form_error('program_yang_dituju', '<span class="text-danger">', '</span>') ?>
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
			</section>
		</div>
		<?php $this->load->view('admin/templates/footer'); ?>
		<div class="control-sidebar-bg">
		</div>
	</div>
	<?php $this->load->view('admin/templates/js'); ?>
	<script>
		$(function() {
			$('#santri').DataTable()
		})
	</script>
</body>

</html>
