<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Voucher
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
<!-- Default box -->
<div class="box">
        <form role="form" action="<?=base_url('aksi_tambah_voucher');?>" method="post">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Voucher</h3>
          
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
                  <label>Nama Voucher</label>
                  <input type="text" class="form-control" name="nama_voucher" placeholder="">
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="id_kategori">
                    <?php if($kategori != ""):  while($row = mysqli_fetch_assoc($kategori)):?>
                      <option><?=$row['nama_kategori'];?></option>
                    <?php endwhile; endif;?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" placeholder="">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" class="form-control" name="harga" placeholder="">
                </div>
                <div class="form-group">
                  <label>Harga Jual</label>
                  <input type="text" class="form-control" name="harga_jual" placeholder="">
                </div>
                <div class="form-group">
                  <label>Status Voucher</label>
                  <select class="form-control" name="status_voucher">
                      <option>tersedia</option>
                      <option>gangguan</option>
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