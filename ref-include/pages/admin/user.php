<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar User
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
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

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar User</h3>
          <a class="btn btn-primary" href="<?=base_url('akun/tambah_user');?>"><i class="fa fa-plus"></i> User</a>
        </div>
        <div class="box-body">
         <?php $no = 1;?>
         <div class="table-responsive">
              <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Role</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                if($users != ""):
                  while($row = mysqli_fetch_assoc($users)):
                ?>
                <tr>
                  <td><?=$no++;?></td>
                  <td><?=$row['username'];?></td>
                  <td><?=$row['role'];?></td>
                  <td>
                    <a class="label label-warning" href="ubah_user?id=<?=$row['id_user'];?>">
                      <i class="fa fa-pencil"></i>
                    </a>

                    <a class="label label-danger" href="<?=base_url('');?>aksi_hapus_user?id=<?=$row['id_user'];?>">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
                  <?php endwhile;
                endif;
                ?>
                </tbody>
              </table>
              </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->