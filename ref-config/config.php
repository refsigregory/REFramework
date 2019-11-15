<?php
$config['site_name']    = "Q-CELL";

$config['site_initial'] = "QC";

if($_SERVER['HTTP_HOST'] == 'localhost'):
    $config['base_url']     = "http://localhost/Projects/penjualan-pulsa/";
else:
    $config['base_url']     = "http://fef5344d.ngrok.io/Projects/penjualan-pulsa/";
endif;

$config['default_page'] = "index.php";
?>