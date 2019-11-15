<?php
$data['title'] = "Manajemen User";
$data['page'] = 'admin/user';
ref_function('my-function');
checkLogin();

$data['users'] = getAllUser();
ref_include('Loader', $data);
?>