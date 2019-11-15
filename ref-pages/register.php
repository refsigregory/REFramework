<?php
$data['title'] = "Register";
$data['page'] = 'page_register';
$data['login'] = true;
ref_function('my-function');
isLogin();
ref_include('Loader', $data);
?>