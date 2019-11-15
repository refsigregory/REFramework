<?php
$data['title'] = "Ubah Data User";
$data['page'] = 'admin/page_ubah_user';
ref_function('my-function');
checkLogin();
$id = $_GET['id'];
$data['user'] = getUserByID($id);
$data['data'] = getMemberByID($id);
ref_include('Loader', $data);
?>