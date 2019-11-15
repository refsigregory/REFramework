<?php
$data['title'] = "Ubah Kategori";
$data['page'] = 'admin/page_ubah_kategori';
ref_function('my-function');
checkLogin();
$data['kategori'] = getKategoriByID($_GET['id']);
ref_include('Loader', $data);
?>