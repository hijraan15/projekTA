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
						<h1 class="box-title">Data Panitia</h1>
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
						<?php if ($pesan = $this->session->flashdata('edit_panitia')) : ?>
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

						<table id="panitia" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Panitia</th>
									<th>Jenis Panitia</th>
									<th>Ruangan</th>
									<th>Username</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<?php
							$no = 0;

							foreach ($dataPanitia as $row) :
								$no++;
							?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $row->nama_panitia; ?></td>
									<td><?php echo $row->nama_role; ?></td>
									<td><?php echo $row->ruangan; ?></td>
									<td><?php echo $row->username; ?></td>
									<td>
										<a href="<?php echo site_url("admin/panitia/editPanitia/{$row->id_panitia}")  ?>" data-toggle="tooltip" data-placement="bottom" title="Ubah Panitia" class="btn btn-warning">Ubah</a>
										<a onclick="return confirm('Yakin data ingin dihapus??')" href="<?php echo site_url("admin/panitia/deletePanitia/{$row->id_panitia}")  ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus Panitia" class="btn btn-danger">Delete</a>
									</td>
								</tr>
							<?php
							endforeach;
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
									<form action="<?php echo site_url('admin/panitia/insertPanitia') ?>" method="post">

										<div class="form-group">
											<label>Nama Panitia</label>
											<input class="form-control" type="text" name="nama_panitia" placeholder="Masukkan nama panitia" required="">
										</div>
										<div class="col-md-12">
											<?php echo form_error('nama_panitia', '<span class="text-danger">', '</span>') ?>
										</div>
										<div class="form-group">
											<label for="">Jenis Panitia</label>
											<select class="form-control" name="nama_role" id="">
												<?php foreach ($role as $r) : ?>
													<option value="<?= $r->id_role ?>"><?= $r->nama_role ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="col-md-12">
											<?php echo form_error('nama_role', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<label>Ruangan</label>
											<input class="form-control" type="text" name="ruangan" placeholder="Masukkan nama ruangan" required="">
										</div>
										<div class="col-md-12">
											<?php echo form_error('ruangan', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<label>Username</label>
											<input class="form-control" type="text" name="username" placeholder="Masukkan username" required="">
										</div>
										<div class="col-md-12">
											<?php echo form_error('username', '<span class="text-danger">', '</span>') ?>
										</div>

										<div class="form-group">
											<input class="btn btn-default" type="button" value="Batal" data-dismiss="modal">
											<input class="btn btn-primary" type="submit" name="" value="Simpan">
										</div>

										<!-- <div class="form-group">
											<label>Jenis Panitia</label>
											<input class="form-control" type="text" name="nama_role" placeholder="Masukkan jenis panitia" required="">

											</div> -->
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
			$('#panitia').DataTable()
		})
	</script>
</body>

</html>
