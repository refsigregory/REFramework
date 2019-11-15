<?php
ref_function('my-function');

    $data = $_POST;

    $id_user = $_POST['id_user'];
    $data_user = getUserByID($id_user);
    if ($data_user != "") {
        $user = ["username" => $data['username'], "password" => generatePassword($data['password']), "role" => $data['role']];
        unset($data['id_user']);
        unset($data['username']);
        unset($data['password']);
        unset($data['role']);

        foreach($user as $item=>$value){
            if($value == ""){
                $err[] = ucfirst($item) . " tidak boleh kosong!";
            }
        }

        if($data_user['username'] != $user['username'])
        {
            if(checkUserByUsername($user['username']))
            {
                $err[] = "Username sudah digunakn";
            }
        }
        
        if($data_user['email'] != $user['email'])
        {
            if(checkMemberByEmail($data['email']))
            {
                $err[] = "Email sudah ada";
            }
        }

        if($_POST['password'] == "") // unset data password jika tidak berubah
        {
            unset($user['password']);
        }

        if(!isset($err))
        {

            $query = db_update("users", $user, ["id_user", $id_user]);
            if($query) 
            {
                db_update("members", $data, ["id_user" => $id_user]);

                $msg = "Data User Berhasil Diubah";
                $_SESION['flashdata'] = array('type' => 'success', 'message' => $msg);
                ref_redir('akun/user?msg=' . $msg);
            } else {
                $msg = mysqli_error($db);
                ref_redir('akun/user?msg=' . $msg);
            }
        }else {
            $msg = implode(" ", $err);
            $_SESION['flashdata'] = array('type' => 'error', 'message' => $msg);
            echo $msg;
            ref_redir('akun/user?msg=' . $msg);
        }
    }else {
        $msg = "Data tidak ada";
        $_SESION['flashdata'] =  array('type' => 'error', 'message' => $msg);
        ref_redir('akun/user');
    }

?>