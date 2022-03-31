<?php
    ob_start();
    session_start();

    include 'config.php';

    $dsn='mysql:host=localhost;port=8080;dbname=abcense';
    $user='root';
    $pass='';
    $option=array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    try {
        $con = new PDO($dsn,$user,$pass,$option);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Failed To Connect" . $e->getMessage();
    }

    if (!isset($_SESSION['lang']) || $_SESSION['lang']=='en') {
        if (isset($file)) include "../include/languages/eng.php";
        else include "include/languages/eng.php";
    }
    else if ($_SESSION['lang']=='ar') {
        if (isset($file)) include "../include/languages/ar.php";
        else include "include/languages/ar.php";
    }
    ob_end_flush();
?>