<?php
$data['title'] = "Ubah Voucher";
$data['page'] = 'admin/page_ubah_voucher';
ref_function('my-function');
checkLogin();
$id = $_GET['id'];
$data['edit'] = getVoucherByID($id);
$data['kategori'] = getAllKategori();
ref_include('Loader', $data);
?>