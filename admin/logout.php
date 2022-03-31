<?php
    ob_start();

    session_start(); // Start Session
    session_unset(); // Unset Session 
    session_destroy(); // Destroy Session

    header('Location: login.php'); // Back To Login Page

    ob_end_flush();
?>