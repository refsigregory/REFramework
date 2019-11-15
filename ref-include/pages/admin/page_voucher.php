<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Voucher
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
          <h3 class="box-title">Daftar Voucher</h3>
          <a class="btn btn-primary" href="<?=base_url('akun/tambah_kategori');?>"><i class="fa fa-plus"></i> Kategori</a>
          <a class="btn btn-primary" href="<?=base_url('akun/tambah_voucher');?>"><i class="fa fa-plus"></i> Voucher</a>
        </div>
        <div class="box-body">
         <?php $no = 1;?>
         <div class="table-responsive">
              <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Nama Voucher</th>
                  <th>Keterangan</th>
                  <th>Harga</th>
                  <th>Harga Jual</th>
                  <th>Status Voucher</th>

                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                if($voucher != ""):
                  while($row = mysqli_fetch_assoc($voucher)):
                ?>
                <tr>
                  <td><?=$no++;?></td>
                  <td><?=getKategoriByID($row['id_kategori'])['nama_kategori'];?></td>
                  <td><?=$row['nama_voucher'];?></td>
                  <td><?=$row['keterangan'];?></td>
                  <td><?=number_format($row['harga']);?></td>
                  <td><?=number_format($row['harga_jual']);?></td>
                  <td><?=$row['status_voucher'];?></td>
                  <td>
                    <a class="label label-warning" href="ubah_voucher?id=<?=$row['id_voucher'];?>">
                      <i class="fa fa-pencil"></i>
                    </a>

                    <a class="label label-danger" href="<?=base_url('');?>aksi_hapus_voucher?id=<?=$row['id_voucher'];?>">
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