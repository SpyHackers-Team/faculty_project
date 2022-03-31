<?php
include "conect.php";
if (isset($_POST['en'])) $_SESSION['lang'] = 'en';
if (isset($_POST['ar'])) $_SESSION['lang'] = 'ar';

if (isset($_POST['url'])) {
    $url = $_POST['url'];
    header("Location: $url");
}
if (!isset($_POST['url'])) header("Location: levels.php");
?>