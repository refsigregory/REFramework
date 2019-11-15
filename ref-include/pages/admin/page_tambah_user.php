<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah User
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
<!-- Default box -->
<div class="box">
        <form role="form" action="<?=base_url('aksi_tambah_user');?>" method="post">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah User Baru</h3>
          
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
                <!-- text input -->
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" placeholder="">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="">
                </div>
                <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" name="role">
                    <option>admin</option>
                    <option>member</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="email" placeholder="">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="">
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="text" class="form-control" name="telepon" placeholder="">
                </div>
                <div class="form-group">
                  <label>Saldo</label>
                  <input type="text" class="form-control" name="saldo" placeholder="">
                </div>
                <div class="form-group">
                  <label>Tipe User</label>
                  <select class="form-control" name="type">
                    <option>personal</option>
                    <option>agen</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option>pending</option>
                    <option>verified</option>
                    <option>unverified</option>
                    <option>suspend</option>
                    <option>banned</option>
                  </select>
                </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button class="btn btn-primary btn-block" type="submit">Tambah</button>
        </div>
        <!-- /.box-footer-->
      </form>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->