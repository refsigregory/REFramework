<?php
$data['title'] = "Deposit";
$data['page'] = 'admin/page_deposit';
ref_function('my-function');
checkLogin();
if($_SESSION['data']['role'] == "admin"):
    $data['deposit'] = getAllDeposit();
else:
    $data['deposit'] = getAllDepositByMember(getMemberByIDUser($_SESSION['data']['id'])['id_member']);
endif;
ref_include('Loader', $data);
?>