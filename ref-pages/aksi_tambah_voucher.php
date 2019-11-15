<?php
ref_function('my-function');

    $data = $_POST;
    if(true) {
        
        foreach($user as $item=>$value){
            if($value == ""){
                $err[] = ucfirst($item) . " tidak boleh kosong!";
            }
        }

        if(!isset($err))
        {

            $query = db_insert("voucher", $data);
            if($query) 
            {
                $msg = "Data Voucher Berhasil Ditambah";
                $_SESION['flashdata'] = array('type' => 'success', 'message' => $msg);
                ref_redir('akun/voucher?msg=' . $msg);
            } else {
                $msg = mysqli_error($db);
                ref_redir('akun/voucher?msg=' . $msg);
            }
        }else {
            $msg = implode(" ", $err);
            $_SESION['flashdata'] = array('type' => 'error', 'message' => $msg);
            echo $msg;
            ref_redir('akun/voucher?msg=' . $msg);
        }
    }else {
        $msg = "Data tidak ada";
        $_SESION['flashdata'] =  array('type' => 'error', 'message' => $msg);
        ref_redir('akun/voucher');
    }

?>