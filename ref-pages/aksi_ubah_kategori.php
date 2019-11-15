<?php
ref_function('my-function');

    $data = $_POST;

    $id_kategori = $_POST['id_kategori'];
    if(true) {
        
        foreach($user as $item=>$value){
            if($value == ""){
                $err[] = ucfirst($item) . " tidak boleh kosong!";
            }
        }

        if(!isset($err))
        {

            $query = db_update("kategori", $data, ["id_kategori", $id_kategori]);
            if($query) 
            {
                $msg = "Data Kategori Berhasil Diubah";
                $_SESION['flashdata'] = array('type' => 'success', 'message' => $msg);
                ref_redir('akun/kategori?msg=' . $msg);
            } else {
                $msg = mysqli_error($db);
                ref_redir('akun/kategori?msg=' . $msg);
            }
        }else {
            $msg = implode(" ", $err);
            $_SESION['flashdata'] = array('type' => 'error', 'message' => $msg);
            echo $msg;
            ref_redir('akun/kategori?msg=' . $msg);
        }
    }else {
        $msg = "Data tidak ada";
        $_SESION['flashdata'] =  array('type' => 'error', 'message' => $msg);
        ref_redir('akun/kategori');
    }

?>