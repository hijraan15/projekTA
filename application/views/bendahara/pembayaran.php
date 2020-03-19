<!DOCTYPE html>
<html>
<?php $this->load->view('bendahara/templates/head'); ?>

<body class="hold-transition skin-green fixed sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('bendahara/templates/header'); ?>
		<div class="content-wrapper">
			<section class="content">
				<div class="box">
					<div class="box-header with-border">
						<h1 class="box-title">Data Pembayaran</h1>
					</div>
					<div class="box-body">
						<?php if ($pesan = $this->session->flashdata('tambah_pembayaran')) : ?>
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
								</tr>
							<?php
							endforeach
							?>
						</table>
					</div>
			</section>
		</div>
		<?php $this->load->view('bendahara/templates/footer'); ?>
		<div class="control-sidebar-bg">
		</div>
	</div>
	<?php $this->load->view('bendahara/templates/js'); ?>
	<script>
		$(function() {
			$('#pembayaran').DataTable()
		})
	</script>
</body>

</html>
