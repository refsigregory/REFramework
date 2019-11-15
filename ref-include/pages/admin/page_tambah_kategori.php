<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Kategori
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
<!-- Default box -->
<div class="box">
        <form role="form" action="<?=base_url('aksi_tambah_kategori');?>" method="post">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Kategori</h3>
          
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
                  <label>Nama Kategori</label>
                  <input type="text" class="form-control" name="nama_kategori" placeholder="">
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