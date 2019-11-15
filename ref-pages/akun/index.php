<?php
$data['title'] = "Dashboard";
$data['page'] = 'admin/dashboard';
ref_function('my-function');
checkLogin();
ref_include('Loader', $data);
?>