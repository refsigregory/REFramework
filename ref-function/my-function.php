<?php
function checkLogin()
{
    if(!isset($_SESSION['data']))
    {
        ref_redir(base_url() . "login");
    }
}

function isLogin()
{
    if(isset($_SESSION['data']))
    {
        ref_redir(base_url() . "akun");
    }
}

function getAllUser()
{
    global $db;
    $query = mysqli_query($db, "select * from users");
    if (mysqli_num_rows($query) > 0)
    {
        return $query;
    } else {
        return "";
    }
}

function getUserByID($id)
{
    global $db;
    $query = mysqli_query($db, "select * from users where id_user = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return mysqli_fetch_assoc($query);
    } else {
        return "";
    }
}


function getMemberByID($id)
{
    global $db;
    $query = mysqli_query($db, "select * from members where id_member = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return mysqli_fetch_assoc($query);
    } else {
        return "";
    }
}
function getMemberByIDUser($id)
{
    global $db;
    $query = mysqli_query($db, "select * from members where id_user = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return mysqli_fetch_assoc($query);
    } else {
        return "";
    }
}


function checkUserByUsername($username)
{
    global $db;
    $query = mysqli_query($db, "select * from users where username = '$username'");
    if (mysqli_num_rows($query) > 0)
    {
        return true;
    } else {
        return false;
    }
}

function checkMemberByEmail($email)
{
    global $db;
    $query = mysqli_query($db, "select * from members where email = '$email'");
    if (mysqli_num_rows($query) > 0)
    {
        return true;
    } else {
        return false;
    }
}


function getPembeliByID($id)
{
    global $db;
    $query = mysqli_query($db, "select * from pembeli where id_pembeli = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return mysqli_fetch_assoc($query);
    } else {
        return "";
    }
}

function getPembeliByUserID($id)
{
    global $db;
    $query = mysqli_query($db, "select * from pembeli where id_user = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return mysqli_fetch_assoc($query);
    } else {
        return "";
    }
}


function getAllPembayaran()
{
    global $db;
    $query = mysqli_query($db, "select * from pembayaran");
    if (mysqli_num_rows($query) > 0)
    {
        return $query;
    } else {
        return "";
    }
}


function getPembayaranByID($id)
{
    global $db;
    $query = mysqli_query($db, "select * from pembayaran where id_pembayaran = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return mysqli_fetch_assoc($query);
    } else {
        return "";
    }
}


function getTransaksiByID($id)
{
    global $db;
    $query = mysqli_query($db, "select * from transaksi where id_transaksi = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return mysqli_fetch_assoc($query);
    } else {
        return "";
    }
}



function getAllVoucher()
{
    global $db;
    $query = mysqli_query($db, "select * from voucher");
    if (mysqli_num_rows($query) > 0)
    {
        return $query;
    } else {
        return "";
    }
}

function getAllVoucherByKategori($id)
{
    global $db;
    $query = mysqli_query($db, "select * from voucher where id_kategori = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return $query;
    } else {
        return "";
    }
}

function getVoucherByID($id)
{
    global $db;
    $query = mysqli_query($db, "select * from voucher where id_voucher = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return mysqli_fetch_assoc($query);
    } else {
        return "";
    }
}

function getKategoriByID($id)
{
    global $db;
    $query = mysqli_query($db, "select * from kategori where id_kategori = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return mysqli_fetch_assoc($query);
    } else {
        return "";
    }
}


function getAllKategori()
{
    global $db;
    $query = mysqli_query($db, "select * from kategori");
    if (mysqli_num_rows($query) > 0)
    {
        return $query;
    } else {
        return "";
    }
}

function getAllDeposit()
{
    global $db;
    $query = mysqli_query($db, "select * from deposit");
    if (mysqli_num_rows($query) > 0)
    {
        return $query;
    } else {
        return "";
    }
}

function getAllDepositByMember($id)
{
    global $db;
    $query = mysqli_query($db, "select * from deposit where id_member = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return $query;
    } else {
        return "";
    }
}


function getDepositByID($id)
{
    global $db;
    $query = mysqli_query($db, "select * from deposit where id_deposit = '$id'");
    if (mysqli_num_rows($query) > 0)
    {
        return mysqli_fetch_assoc($query);
    } else {
        return "";
    }
}

function generatePassword($string)
{
    return password_hash($string, PASSWORD_DEFAULT);
}
?>