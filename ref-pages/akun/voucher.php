<?php
$data['title'] = "Voucher";
$data['page'] = 'admin/page_voucher';
ref_function('my-function');
checkLogin();

$data['voucher'] = getAllVoucher();
ref_include('Loader', $data);
?>