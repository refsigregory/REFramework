<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Deposit
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
          <h3 class="box-title">Deposit</h3>
          <a class="btn btn-primary" href="<?=base_url('akun/tambah_deposit');?>"><i class="fa fa-plus"></i> Deposit</a>
        </div>
        <div class="box-body">
         <?php $no = 1;?>
         <div class="table-responsive">
              <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Member</th>
                  <th>Nominal</th>
                  <th>Waktu</th>
                  <th>Status</th>
                  <th>Bukti Transaksi</th>

                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                if($deposit != ""):
                  while($row = mysqli_fetch_assoc($deposit)):
                ?>
                <tr>
                  <td><?=$no++;?></td>
                  <td><?=getMemberByID($row['id_member'])['nama'];?></td>
                  <td><?=number_format($row['nominal']);?></td>
                  <td><?=date("H:i:s d-m-Y", $row['waktu']);?></td>
                  <td><?=$row['status_deposit'];?></td>
                  <td>
                      <?php if($row['bukti_transaksi'] != ""):?>
                    <a class="label label-info" href="?show_image=<?=$row['bukti_transaksi'];?>"  title="Lihat Bukti Transaksi">
                      <i class="fa fa-eye"></i> Lihat Bukti Transaksi
                    </a>
                      <?php endif;?>
                  </td>
                  <td>
                    <a class="label label-success" href="<?=base_url('');?>aksi_konfirmasi_deposit?id=<?=$row['id_deposit'];?>"  title="Konfirmasi Pembayaran">
                      <i class="fa fa-check"></i>
                    </a>

                    <a class="label label-warning" href="<?=base_url('');?>aksi_refund_deposit?id=<?=$row['id_deposit'];?>" title="Refund">
                      <i class="fa fa-refresh"></i>
                    </a>

                    <a class="label label-danger" href="<?=base_url('');?>aksi_cancel_deposit?id=<?=$row['id_deposit'];?>" title="Batalkan">
                      <i class="fa fa-close"></i>
                    </a>

                    <a class="label label-danger" href="<?=base_url('');?>aksi_hapus_deposit?id=<?=$row['id_deposit'];?>" title="Hapus">
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

  <?php if(isset($_GET['show_image'])) { ?>
  <div class="modal fade" id="show-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Show Image</h4>
      </div>
      <div class="modal-body">
        <img  style="width:100%" src="<?=base_url('ref-files/images/' . $_GET['show_image']);?>" />
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary pull-left">Simpan Perubahan</button></form>
        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Tutup</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php } ?>