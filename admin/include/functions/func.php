<?php

    // Get Title Function
    function getTitle() {

        global $pageTitle;
        if (isset($pageTitle)) {

            echo 'Attendance | ' . $pageTitle;

        }else {

            echo 'Attendance';
            
        }

    }
?>