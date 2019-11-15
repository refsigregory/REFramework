<?php
ref_function('my-function');

    $data = $_POST;
    if(true) {
        $user = ["username" => $data['username'], "password" => generatePassword($data['password']), "role" => "member"];
        unset($data['username']);
        unset($data['password']);

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
                $data = array_merge($data, ["id_user" => mysqli_insert_id($db), "type" => "personal"]);
                db_insert("members", $data);

                $msg = "Pendaftaran Berhasil";
                $_SESION['flashdata'] = array('type' => 'success', 'message' => $msg);
                ref_redir(base_url() . 'login?msg=' . $msg);
            } else {
                $msg = mysqli_error($db);
                ref_redir(base_url() . 'register?msg=' . $msg);
            }
        }else {
            $msg = implode(" ", $err);
            $_SESION['flashdata'] = array('type' => 'error', 'message' => $msg);
            echo $msg;
            ref_redir(base_url() . 'register?msg=' . $msg);
        }
    }else {
        $msg = "Data tidak ada";
        $_SESION['flashdata'] =  array('type' => 'error', 'message' => $msg);
        ref_redir(base_url() . 'register');
    }

?>