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
						<h1 class="box-title">Data Pembayaran</h1>
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
						<?php if ($pesan = $this->session->flashdata('edit_pembayaran')) : ?>
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

						<table id="pembayaran" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Santri</th>
									<th>Daerah</th>
									<th>Jenis Kelamin</th>
									<th>Program</th>
									<th>Status Santri</th>
									<th>Uang Pendaftaran</th>
									<th>Keterangan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<?php
							$no = 0;
							foreach ($dataPembayaran as $row) :
								$no++;
							?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $row->nama_santri; ?></td>
									<td><?php echo $row->alamat_rumah; ?></td>
									<td><?php echo $row->jenis_kelamin; ?></td>
									<td><?php echo $row->program_yang_dituju; ?></td>
									<td><?php echo $row->status_santri; ?></td>
									<td><?php echo $row->uang_pendaftaran; ?></td>
									<td><?php echo $row->ket; ?></td>
									<td>
										<a href="<?php echo site_url("admin/pembayaran/editPembayaran/{$row->id_transaksi}")  ?>" data-toggle="tooltip" data-placement="bottom" title="Ubah Pembayaran" class="btn btn-warning">Ubah</a>
										<a onclick="return confirm('Yakin data ingin dihapus??')" href="<?php echo site_url("admin/pembayaran/deletePembayaran/{$row->id_transaksi}")  ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus Pembayaran" class="btn btn-danger">Delete</a>
									</td>
								</tr>
							<?php
							endforeach
							?>
						</table>
					</div>

					<div id="AddModal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<div class="modal-title">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 style="margin-left:220px;">Tambah Data</h4>
									</div>
								</div>
								<div class="modal-body">
									<form action="<?php echo site_url('admin/pembayaran/insertPembayaran') ?>" method="post">

										<div class="form-group">
											<label for="">Nama Santri</label>
											<select class="form-control" name="nama_santri" id="">
												<?php foreach ($santri as $s) : ?>
													<option value="<?= $s->id_santri ?>"><?= $s->nama_santri ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('nama_santri', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<label for="">Daerah</label>
											<select class="form-control" name="alamat_rumah" id="">
												<?php foreach ($santri as $r) : ?>
													<option value="<?= $r->id_santri ?>"><?= $r->alamat_rumah ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('alamat_rumah', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<label for="">Jenis Kelamin</label>
											<select class="form-control" name="jenis_kelamin" id="">
												<?php foreach ($santri as $r) : ?>
													<option value="<?= $r->id_santri ?>"><?= $r->jenis_kelamin ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('jenis_kelamin', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<label for="">Program</label>
											<select class="form-control" name="program_yang_dituju" id="">
												<?php foreach ($santri as $r) : ?>
													<option value="<?= $r->id_santri ?>"><?= $r->program_yang_dituju ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('program_yang_dituju', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<label for="">Status Santri</label>
											<select class="form-control" name="status_santri" id="">
												<?php foreach ($santri as $r) : ?>
													<option value="<?= $r->id_santri ?>"><?= $r->status_santri ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('status_santri', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<label>Uang Pendaftaran</label>
											<input class="form-control" type="text" name="uang_pendaftaran" placeholder="Masukkan uang pendaftaran" required="">
										</div>
										<div class="col-md-12">
											<?php echo form_error('uang_pendaftaran', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<label>Keterangan</label>
											<input class="form-control" type="text" name="ket" placeholder="Masukkan keterangan" required="">
										</div>
										<div class="col-md-12">
											<?php echo form_error('ket', '<span class="text-danger">', '</span>') ?>
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
			$('#pembayaran').DataTable()
		})
	</script>
</body>

</html>
