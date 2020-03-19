
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
          <label for="" class="col-sm-2 control-label">Nama Panitia</label>
          <div class="col-sm-10">
            <p><?php echo $nama_panitia; ?></p>
          </div>
        </div>
         <div class="form-group row">
          <label for="" class="col-sm-2 control-label">Ruangan</label>
          <div class="col-sm-10">
            <p><?php echo $ruangan; ?></p>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-10">
            <p><?php echo $username; ?></p>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <p><?php echo $password; ?></p>
          </div>
        </div>
        

      <div class="box-footer">
      <a href="<?php echo site_url('admin/panitia/form_edit_data_panitia' . $id_panitia); ?>" class="btn btn-primary">
        Update
      </a>
        <a href="<?php echo base_url(); ?>index.php/admin/panitia" class="btn btn-default">Kembali</a>
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
    $('#panitia').DataTable()
  })
</script>
</body>
</html>
