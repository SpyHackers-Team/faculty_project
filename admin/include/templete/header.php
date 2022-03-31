<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="<?php if(isset($file)) {echo "../";} echo $img . "icon.jpeg";?>">
        <link rel="stylesheet" href="<?php if(isset($file)) {echo "../";} echo $css . "style.css" ?>">
        <link href="<?php if(isset($file)) {echo "../";} ?>layout/fontawesome-free-5.15.3-web/css/all.min.css" rel="stylesheet">
        <link href="<?php if(isset($file)) {echo "../";} ?>layout/fontawesome-free-5.15.3-web/css/fontawesome.min.css" rel="stylesheet">
        <?php if (isset($bootstrab)) {echo '<link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">'; } ?>
        <title><?php getTitle(); ?></title>
    </head>
    <body>

<?php

?>