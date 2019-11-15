<?php
if(isset($_POST['username']) && isset($_POST['password'])):

$username = htmlentities(htmlspecialchars($_POST['username']));
$password = htmlentities(htmlspecialchars($_POST['password']));

$query = mysqli_query($db, "select * from users where `username` = '$username'");
if(mysqli_num_rows($query) > 0)
{
    $data = mysqli_fetch_array($query);

    if(password_verify($password, $data['password']))
    {
        $_SESSION['data'] = [
            'id'        => $data['id_user'],
            'username'  => $data['username'],
            'role'      => $data['role']
        ];
        ref_redir(base_url() . 'akun');
    } else {
        $msg = "Password Salah";
        ref_redir(base_url() . "login?error=".$msg);
    }
} else {
    $msg = "User tidak ditemukan";
    ref_redir(base_url() . "login?error=".$msg);
}

else:
    $msg = "Harap memasukan username dan password";
    ref_redir(base_url() . "login?error=".$msg);
endif;
?>