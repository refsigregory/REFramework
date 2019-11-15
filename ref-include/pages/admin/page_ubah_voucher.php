<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Voucher
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
<!-- Default box -->
<div class="box">
        <form role="form" action="<?=base_url('aksi_ubah_voucher');?>" method="post">
        <input type="hidden" name="id_voucher" value="<?=$edit['id_voucher'];?>">
        <div class="box-header with-border">
          <h3 class="box-title">Ubah Voucher</h3>
          
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
                  <input type="text" class="form-control" name="nama_voucher" placeholder="" value="<?=$edit['nama_voucher'];?>">
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="id_kategori">
                    <?php if($kategori != ""):  while($row = mysqli_fetch_assoc($kategori)):?>
                      <option value="<?=$row['id_kategori'];?>" <?=($row['id_kategori']==$edit['id_kategori']) ? 'selected="selected"' : '';?>><?=$row['nama_kategori'];?></option>
                    <?php endwhile; endif;?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" placeholder="" value="<?=$edit['keterangan'];?>">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" class="form-control" name="harga" placeholder="" value="<?=$edit['harga'];?>">
                </div>
                <div class="form-group">
                  <label>Harga Jual</label>
                  <input type="text" class="form-control" name="harga_jual" placeholder="" value="<?=$edit['harga_jual'];?>">
                </div>
                <div class="form-group">
                  <label>Status Voucher</label>
                  <select class="form-control" name="status_voucher">
                      <option <?=($edit['status_voucher'] == 'tersedia') ? 'selected="selected"' : '';?>>tersedia</option>
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