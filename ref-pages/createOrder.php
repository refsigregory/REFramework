<?php
ref_function('my-function');

if(isset($_POST))
{
    $pembayaran = getPembayaranByID($_POST['id_pembayaran']);
    if($pembayaran != ""):
        //checkLogin();
        $nomor_handphone = $_POST['nomor_handphone'];
        $id_kategori = $_POST['id_kategori'];
        $id_voucher = $_POST['id_voucher'];
        $id_pembayaran = $_POST['id_pembayaran'];

        $voucher = getVoucherByID($id_voucher);
        $kategori = getKategoriByID($voucher['id_kategori']);

        $data = ["nomor_telepon" => $nomor_handphone, "id_voucher" => $id_voucher, "harga" => $voucher['harga_jual'], "id_pembayaran" => $id_pembayaran  , "status_transaksi" => "pending", "waktu" => time()];

        $query = db_insert("transaksi", $data);

        if($query)
        {
            ref_redir('order?view=' . mysqli_insert_id($db));
        } else {
            //ref_redir('');
            echo "Terjadi Kesalahan";
        }
    else:
        echo "Pembayaran tidak ditemukan";
    endif;
}
