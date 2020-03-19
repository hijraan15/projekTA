
<!DOCTYPE html>
    <html>
        <?php $this->load->view('admin/templates/head'); ?>
            <body class="hold-transition skin-blue fixed sidebar-mini">
                <div class="wrapper">
                        <?php $this->load->view('admin/templates/header'); ?>
                            <div class="content-wrapper">
                                <section class="content">


    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/dist/img/user.png" alt="User profile picture">

        <div class="form-group row">
          <label for="" class="col-sm-2 control-label">Nama Santri</label>
          <div class="col-sm-10">
            <p><?php echo $nama_santri; ?></p>
        </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 control-label">Alamat Rumah</label>
          <div class="col-sm-10">
            <p><?php echo $alamat_rumah; ?></p>
          </div>
        </div>
         <div class="form-group row">
          <label for="" class="col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <p><?php echo $jenis_kelamin; ?></p>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 control-label">Program Yang Dituju</label>
          <div class="col-sm-10">
            <p><?php echo $program_yang_dituju; ?></p>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 control-label">Status Santri</label>
          <div class="col-sm-10">
            <p><?php echo $status_santri; ?></p>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 control-label">Uang Pendaftaran</label>
          <div class="col-sm-10">
            <p><?php echo $uang_pendaftaran; ?></p>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 control-label">Bukti Pembayaran</label>
          <div class="col-sm-10">
            <p><?php echo $bukti_pembayaran; ?></p>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 control-label">Keterangan</label>
          <div class="col-sm-10">
            <p><?php echo $ket; ?></p>
          </div>
        </div>
       

      <div class="box-footer">
      <a href="<?php echo site_url('admin/pembayaran/form_pembayaran/' . $id_transaksi); ?>" class="btn btn-primary">
        Update
      </a>
        <a href="<?php echo base_url(); ?>index.php/admin/pembayaran" class="btn btn-default">Kembali</a>
      </div>
      </div>
    </div>
</section>
  </div>
 <?php $this->load->view('admin/templates/footer'); ?>
  <div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('admin/templates/js');?>
<script>
  $(function (){
    $('#transaksi').DataTable()
    })
</script>
</body>
</html>
