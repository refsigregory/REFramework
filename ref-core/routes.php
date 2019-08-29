<?php
foreach ($dir_list as $dir) {
     foreach (glob($dir."*.php") as $filename)
         echo $filename . "<br>";
         require_once $filename;
 }
 ?>