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
        <form role="form" action="<?=base_url('aksi_tambah_deposit');?>" method="post"  enctype="multipart/form-data">
        <div class="box-header with-border">
          <h3 class="box-title">Deposit Saldo</h3>
          
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
                  <label>Nominal</label>
                  <input type="text" class="form-control" name="nominal" placeholder="">
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Bukti Transaksi</label>
                  <input type="file" class="form-control" name="bukti_transaksi" placeholder="">
                </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button class="btn btn-primary btn-block" type="submit" name="submit">Tambah</button>
        </div>
        <!-- /.box-footer-->
      </form>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->