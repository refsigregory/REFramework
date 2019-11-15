<?php
$data['title'] = "Kategori";
$data['page'] = 'admin/page_kategori';
ref_function('my-function');
checkLogin();

$data['kategori'] = getAllKategori();
ref_include('Loader', $data);
?>