<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Data User
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
<!-- Default box -->
<div class="box">
        <form role="form" action="<?=base_url('aksi_ubah_user');?>" method="post">
        <div class="box-header with-border">
          <h3 class="box-title">Data User</h3>
          
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
                <input type="hidden" name="id_user" value="<?=$user['id_user'];?>">
                <!-- text input -->
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" placeholder="" value="<?=$user['username'];?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="" value="">
                </div>
                <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" name="role">
                    <option <?=($user['role'] == 'admin') ? 'selected="selected"' : '';?>">admin</option>
                    <option <?=($user['role'] == 'member') ? 'selected="selected"' : '';?>>member</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="" value="<?=$data['nama'];?>">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="" value="<?=$data['email'];?>">
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="text" class="form-control" name="telepon" placeholder="" value="<?=$data['telepon'];?>">
                </div>
                <div class="form-group">
                  <label>Saldo</label>
                  <input type="text" class="form-control" name="saldo" placeholder="" value="<?=$data['saldo'];?>">
                </div>
                <div class="form-group">
                  <label>Tipe User</label>
                  <select class="form-control" name="type">
                    <option <?=($data['type'] == 'personal') ? 'selected="selected"' : '';?>>personal</option>
                    <option <?=($data['type'] == 'agen') ? 'selected="selected"' : '';?>>agen</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option <?=($data['status'] == 'pending') ? 'selected="selected"' : '';?>>pending</option>
                    <option <?=($data['status'] == 'verified') ? 'selected="selected"' : '';?>>verified</option>
                    <option <?=($data['status'] == 'unverified') ? 'selected="selected"' : '';?>>unverified</option>
                    <option <?=($data['status'] == 'suspend') ? 'selected="selected"' : '';?>>suspend</option>
                    <option <?=($data['status'] == 'banned') ? 'selected="selected"' : '';?>>banned</option>
                  </select>
                </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </div>
        <!-- /.box-footer-->
      </form>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->