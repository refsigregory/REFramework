<?php
/**
 * Fungsi untuk mengambil REQUEST_URI
 */
if(isset($_SERVER['REQUEST_URI']))
{
    $_req = $_SERVER['REQUEST_URI'];
    $_req = explode("?", $_req); // Memecah url dan REQUEST_URI
    if(count($_req) > 0) // REQUEST_URI ada?
    {   $_uri = $_req;
        if(isset($_uri[1]))
        {
            $_req = $_uri[1];
            $_req = explode("&", $_req); // Memecah REQUIEST_URI jika lebih dari satu
            if(count($_req) > 0)
            {
                foreach($_req as $_req_row)
                {
                    $_req_uri = explode("=", $_req_row); // Memecah key dan value dari URI
                    $_GET[urldecode($_req_uri[0])] = urldecode($_req_uri[1]); // Memasukan URI kedalam GET
                }
            }
        }
    }
}
?>