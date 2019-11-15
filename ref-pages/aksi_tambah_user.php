<?php
ref_function('my-function');

    $data = $_POST;
    if(true) {
        $user = ["username" => $data['username'], "password" => generatePassword($data['password']), "role" => $data['role']];
        unset($data['username']);
        unset($data['password']);
        unset($data['role']);

        foreach($user as $item=>$value){
            if($value == ""){
                $err[] = ucfirst($item) . " tidak boleh kosong!";
            }
        }

        if(checkUserByUsername($user['username']))
        {
            $err[] = "Username sudah digunakn";
        }
        
        if(checkMemberByEmail($data['email']))
        {
            $err[] = "Email sudah ada";
        }

        if(!isset($err))
        {

            $query = db_insert("users", $user);
            if($query) 
            {
                $data = array_merge($data, ["id_user" => mysqli_insert_id($db)]);
                db_insert("members", $data);

                $msg = "Data User Berhasil Ditambah";
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