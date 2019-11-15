<?php
$data['title'] = "Tambah Voucher";
$data['page'] = 'admin/page_tambah_voucher';
ref_function('my-function');
checkLogin();
$data['kategori'] = getAllKategori();
ref_include('Loader', $data);
?>