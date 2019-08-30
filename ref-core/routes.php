<?php
require_once REF_PREFIX . '-config/config.php';

$REF_load_page = $config['default_page'];
$REF_pages_dir = REF_PREFIX . "-pages/";

if(isset($_GET['REF_page'])) {

 $REF_page = $_GET['REF_page'];
 $get['segment'] = explode("/", $REF_page);

 // TODO: convert _GET request
 $REF_get_data = explode("?", $REF_page);
 //print_r($REF_get_data);
 

 $REF_load_page = $REF_page;

if(is_file($REF_pages_dir . $REF_load_page . '.php')) {
    require_once $REF_pages_dir . $REF_load_page . '.php';
} else if(is_dir($REF_pages_dir . $REF_load_page)) {
    $REF_req_page = $REF_pages_dir . $REF_load_page . '/index.php';
    if(is_file($REF_req_page))
    {
        require_once $REF_req_page;
    } else {
        echo "Not Found";
    }
} else {
    if($REF_load_page != ''){
        echo "Page not found: " . $REF_load_page;
    } else {
        echo "Not Found";
    }
}
} else {
    $REF_req_page = $REF_pages_dir . $REF_load_page;
    if(is_file($REF_req_page))
    {
        require_once $REF_req_page;
    } else {
        echo "Not Found";
    }
}
?>