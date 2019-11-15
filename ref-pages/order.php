<?php
$data['title'] = "Order";
ref_function('my-function');

if(isset($_GET['view']))
{

    $id_transaksi = $_GET['view'];
    $transaksi = getTransaksiByID($id_transaksi);

    $voucher = getVoucherByID($transaksi['id_voucher']);
    $kategori = getKategoriByID($voucher['id_kategori']);
    $pembayaran = getPembayaranByID($transaksi['id_pembayaran']);
}

if(false):
    //checkLogin();
else:

endif;

ref_include("web/header");
?>

<div class="container">
  <!-- Content here -->
    <div class="row">
    <div class="col-md">  
              <table class="table">
                <tr>
                  <th colspan="3">Invoice #<?=$transaksi['id_transaksi'];?></th>
                </tr>
                <tr>
                  <td>Jenis Produk</td>
                  <td><?=$kategori['tipe_kategori'];?></td>
                </tr>
                <tr>
                  <td>Provider</td>
                  <td><?=$kategori['nama_kategori'];?></td>
                </tr>
                <tr>
                  <td>Voucher</td>
                  <td><?=$voucher['nama_voucher'];?></td>
                </tr>
                <tr>
                  <td>Nomor HP</td>
                  <td><?=$transaksi['nomor_telepon'];?></td>
                </tr>
                <tr>
                  <td>Harga</td>
                  <td><?=number_format($transaksi['harga']);?></td>
                </tr>
                <tr>
                  <td>Pembayaran</td>
                  <td><?=$pembayaran['nama_pembayaran'];?></td>
                </tr>
                <tr>
                  <td>Tanggal Pembelian</td>
                  <td><?=date("H:i:s d-m-Y", $transaksi['waktu']);?></td>
                </tr>
                <tr>
                  <td>Status Pembayaran</td>
                  <td><?=$transaksi['status_pembayaran'];?></td>
                </tr>
                <tr>
                  <td>Status Pengisian</td>
                  <td><?=$transaksi['status_pengisian'];?></td>
                </tr>
              </table>
    </div>
    <div class="col-md-4">
              <table class="table">
                <tr>
                  <th>Bayar Dengan <?=$pembayaran['nama_pembayaran'];?></th>
                </tr>
                <tr>
                  <td colspan="2"><?=$pembayaran['deskripsi'];?></td>
                </tr>
                <tr>
                  <td>Harga</td>
                  <td><?=number_format($voucher['harga_jual']);?></td>
                </tr>
                <tr>
                  <td>Harga Total</td>
                  <td><?=number_format($transaksi['harga']);?></td>
                </tr>
                <tr>
                  <td colspan="2"><?=$pembayaran['keterangan'];?></td>
                </tr>
                <tr>
                    <td colspan="2"><button class="btn btn-primary btn-block">Konfirmasi Pembayaran</button></td>
                </tr>
              </table>
    </div>
    </div>
</div>

<?php
    ref_include("web/footer");
?>