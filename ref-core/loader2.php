<?php

$load_page = 'index.php';

if(isset($_GET['page'])) {

 $page = $_GET['page'];
 $pages_dir = REF_PREFIX . "-pages/";
 $pages_list = [];
 $load_page = '';

 // Load All Pages
 $dh  = opendir($pages_dir);
 $dir_list = array($pages_dir);
 while (false !== ($filename = readdir($dh))) {
     if($filename!="."&&$filename!=".."&&is_dir($pages_dir.$filename))
         array_push($dir_list, $pages_dir.$filename."/");
 }
 foreach ($dir_list as $dir) {
    foreach (glob($dir."*.php") as $filename) {
        $url = explode(".", $filename);
        $url = explode("/", $url[0]);
        $pages_list[] = [
            "segment" => $url,
            "dir" => $filename
        ];
    }
}
echo "<pre>";
//print_r($pages_list);
echo "</pre>";

if(!empty($page))
{   
    $page = explode("/", $page);
    $page_num = 0;
    $segment_num = 0;
    $segment_idx = 0;
    $isfile = false;
    $finish = false;
    
    foreach ($pages_list as $pages)
    {
        foreach ($pages['segment'] as $segment)
        {
            /**
             * Lapisan Direktori:
             * /ref-pages/segment(1)/segment(2)
             * Lapisan Request:
             * $_GET['page'] = segment(0)/segment(1)
             * */  
            if($page[0] == $pages['segment'][1] && $segment_num == 0)
            { // Req 1 segment
                
                if(count($pages['segment']) > 2)
                {
                    $load_page .= '/' . $pages['segment'][1];
                } else {
                    $load_page .= '/' . $pages['segment'][1] . '.php';
                    $isfile = true;
                }
                $segment_num++;
            }

            if($segment_num == 1 && count($page) > 1 && !$finish)
            { // Req > 1 segment
                if ($page[1] == $pages['segment'][2]) {
                    $load_page .= '/' . $pages['segment'][2]; 
                    $finish = true;
                }


                if($pages['segment'][2] != 'index') {
                    $isfile = true;
                }
            }
            $segment_idx++;
        }
        $segment_idx = 0;
    }
    
    echo 'Route: ' . $load_page . "<br>";

    if($load_page != '') {
        
        if($segment_num == 0) {
            $load_page = 'index.php';
        } else if($segment_num == 1 && !$isfile) {
            $load_page = $load_page . '/index.php';
        } else if($segment_num == 1 && $isfile) {
            $load_page = $load_page;
        }
    }
} else {
   $load_page = 'index.php';
}

}

if(is_file(REF_PREFIX . '-pages/' . $load_page)) {
    require_once REF_PREFIX . '-pages/' . $load_page;
} else {
    if($load_page != ''){
        echo "File not found: " . $load_page;
    } else {
        echo "Not Found";
    }
}
?>