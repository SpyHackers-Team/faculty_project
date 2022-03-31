<?php 

    $temp = "include/templete/";
    $img = "layout/img/";
    $css = "layout/css/";
    $js = "layout/js/";

    include "conect.php";
    
    if(isset($file)) {include  "../include/functions/func.php";}
    else {include  "include/functions/func.php";}
    include $temp . "header.php";
    include $temp . "navbar.php";

    
?>