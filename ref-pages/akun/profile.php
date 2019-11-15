<?php
$data['title'] = "Data Pribadi";
$data['page'] = 'admin/page_profile';
ref_function('my-function');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
} else {
    $id = $_SESSION['data']['id'];
}

$data['user'] = getUserByID($id);

if($data['user'] != ""):
if($data['user']['role'] == "member")
{
    $data['member'] = getMemberByIDUser($data['user']['id_user']);
        
}
    ref_include('Loader', $data);
else:
    ref_redir('index');
endif;
?>