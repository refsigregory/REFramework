<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data User</h3>
        </div>
        <div class="box-body">
          <strong>Nama</strong>
          <p class="text-muted">
            <?=($user['role']=='admin' && empty($_GET['id'])) ? $user['username'] : $member['nama'];?>
          </p>
          <hr>
        
          <?php if($user['role']!='admin'):?>
          <strong>Email</strong>
          <p class="text-muted">
            <?=$member['email'];?>
          </p>
          <hr>

          <strong>Telepon</strong>
          <p class="text-muted">
            <?=$member['telepon'];?>
          </p>
          <hr>

          <strong>Saldo</strong>
          <p class="text-muted">
            <?=number_format($member['saldo']);?>
          </p>
          <hr>

          <?php endif;?>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->