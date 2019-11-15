<?php
/**
 * Fungsi untuk redirect
 */
function ref_redir($url)
{
    header("Location: $url");
}

/**
 * Fungsi untuk Loading file, kira-kira seperti load view dalam framework
 */
function ref_include($filename, $data = "")
{
    if($data != "")
    {
        foreach ($data as $key => $value) { // Menangkap $data dan mendefinisikan sebagai variabel
            if(is_array($value)){ // cek jika value dari $data adalah array juga
                foreach ($value as $k => $v) { // jika value adalah array, value tersebut dipecah lagi dan dibuat menjadi variabel
                    $$key[$k] = $v;
                }
            } else { // jika value bukan array, akan lansung didefinisikan sebagai variabel
                $$key = $value;
            }
             
        }
    }
    require_once REF_PREFIX . '-include/' . $filename . '.php';
}

/**
 * Fungsi untuk Load page, kira-kira seperti Controller dalam Framework
 */
function ref_pages($filename, $data = "")
{
    if($data != "")
    {
        foreach ($data as $key => $value) {
            $$key = $value; 
        }
    }
    require_once REF_PREFIX . '-pages/' . $filename . '.php';
}

/**
 * Fungsi untuk Load function yang telah dibuat, bisa seperti model pada framework
 */
function ref_function($filename, $data = "")
{
    if($data != "")
    {
        foreach ($data as $key => $value) {
            $$key = $value; 
        }
    }
    require_once REF_PREFIX . '-function/' . $filename . '.php';
}

/**
 * Fungsi untuk mendeklarasi config menjadi variabel
 */
function ref_config($name)
{
    global $config;
    return $config[$name];
}
?>