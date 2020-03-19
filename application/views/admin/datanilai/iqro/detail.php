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
						<h4 class="box-title">Detail Baca Iqro</h4>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-6">
								<!-- /.form-group -->
								<div class="form-group row">
									<label for="inputNoPendaftaran" class="col-sm-5 control-label">No Pendaftaran</label>
									<div class="col-sm-5">
										<p><?php echo $id_santri; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputNama" class="col-sm-5 control-label">Nama Santri</label>
									<div class="col-sm-5">
										<p><?php echo $nama_santri; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputtesIqro" class="col-sm-5 control-label">Tes Baca Iqro</label>
									<div class="col-sm-5">
										<p><?php echo $tes_iqro; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputKet" class="col-sm-5 control-label">Keterangan</label>
									<div class="col-sm-5">
										<p><?php echo $ket; ?></p>
									</div>
								</div>


								<!-- /.form-group -->
							</div>
						</div>
					</div>
					<div class="box-footer">
						<a href="<?php echo base_url(); ?>index.php/admin/iqro" class="btn btn-default">Kembali</a>
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
			$('#iqro').DataTable()
		})
	</script>
</body>

</html>
