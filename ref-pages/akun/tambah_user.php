<?php
$data['title'] = "Manajemen User";
$data['page'] = 'admin/page_tambah_user';
ref_function('my-function');
checkLogin();

$data['users'] = getAllUser();
ref_include('Loader', $data);
?>