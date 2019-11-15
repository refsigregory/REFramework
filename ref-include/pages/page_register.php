
<div class="login-box">
  <div class="login-logo">
    <a href="<?=base_url();?>"><b><?=ref_config("site_name");?></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">
          <?php if(isset($_GET['success'])): ?>
             <div class="alert alert-success"><?=$_GET['success'];?></div>
          <?php elseif (isset($_GET['warning'])): ?>
             <div class="alert alert-warning"><?=$_GET['warning'];?></div>
          <?php elseif (isset($_GET['error'])): ?>
             <div class="alert alert-danger"><?=$_GET['error'];?></div>
             <?php elseif (isset($_GET['msg'])): ?>
             <div class="alert alert-info"><?=$_GET['msg'];?></div>
          <?php endif; ?>
    </p>

    <form action="<?=base_url('auth/processRegister');?>" method="post">

     <div class="form-group has-feedback">
        <input type="text" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Nama Pengguna">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Kata Sandi">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="telepon" class="form-control" placeholder="Telepon">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Mendaftar</button>
        </div>
        <!-- /.col -->
      </div>

    <a href="#">Lupa kata sandi</a><br>
    <a href="<?=base_url();?>login" class="text-center">Sudah Punya Akun</a>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->