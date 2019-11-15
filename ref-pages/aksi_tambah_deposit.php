<?php
ref_function('my-function');

$target_dir = "ref-files/images/";
$filename = $_FILES["bukti_transaksi"]["name"];
$target_file = $target_dir . basename($filename);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["bukti_transaksi"]["tmp_name"]);
    if($check !== false) {
        //$msg[] =   "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $msg[] =   "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        //$msg[] =   "Sorry, file already exists.";
        //$uploadOk = 0;
    }
    // Check file size
    if ($_FILES["bukti_transaksi"]["size"] > 500000) {
        $msg[] =   "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $msg[] =   "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg[] =   "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["bukti_transaksi"]["tmp_name"], $target_dir . md5(explode(".", $filename)[0] . time()) . "." . explode(".", $filename)[1])) {
            //$msg[] =   "The file ". basename( $_FILES["bukti_transaksi"]["name"]). " has been uploaded.";
        } else {
            $msg[] =  "Sorry, there was an error uploading your file.";
        }
    }

    $data_member = getMemberByIDUser($_SESSION['data']['id']);
    if($data_member != "")
    {
        $id_member = $data_member['id_member'];
    } else {
        $msg[] = "Member tidak ada";
    }

    if($uploadOk == 1 && empty($msg)) {
        $data = $_POST;
        if(true) {
            $data = ["id_member" => $id_member, "nominal" => $data['nominal'], "bukti_transaksi" => $filename, "status_deposit" => "pending", "waktu" => time()];
    
            foreach($user as $item=>$value){
                if($value == ""){
                    $err[] = ucfirst($item) . " tidak boleh kosong!";
                }
            }
    
            if(!isset($err))
            {
                $query = db_insert("deposit", $data);
                if($query) 
                {
                    $msg = "Data Deposit Berhasil Ditambah";
                    $_SESION['flashdata'] = array('type' => 'success', 'message' => $msg);
                    ref_redir('akun/deposit?msg=' . $msg);
                } else {
                    $msg = mysqli_error($db);
                    ref_redir('akun/deposit?msg=' . $msg);
                }
            }else {
                $msg = implode(" ", $err);
                $_SESION['flashdata'] = array('type' => 'error', 'message' => $msg);
                echo $msg;
                ref_redir('akun/deposit?msg=' . $msg);
            }
        }else {
            $msg = "Data tidak ada";
            $_SESION['flashdata'] =  array('type' => 'error', 'message' => $msg);
            ref_redir('akun/deposit?msg=' . $msg);
        }
    } else {
        $msg = implode(" ", $msg);
        $_SESION['flashdata'] =  array('type' => 'error', 'message' => $msg);
        ref_redir('akun/deposit?msg=' . $msg);
    }
}



?>