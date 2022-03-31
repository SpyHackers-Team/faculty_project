<?php

    // // Check If Get Request UserID Is Numeric & Get The Integer Value Of It
    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;

    // // Select All Data Depend On This ID
    // $check = checkItem('id', 'datafirst', $id);

    // If There's Such ID Show The Form
    // if (isset($_POST[])) { 
        $stmt = $con->prepare("DELETE FROM student_two WHERE UserID = :zname");
        $stmt->bindParam(":zname", $id);
        $stmt->execute();
        header("Location: ../levels.php");
        

    // } else {
    //     $msg = '<div class="alert alert-primary">Sorry, This id Isn\'t Exist</div>';
    //     $page = 'Student Count';
    //     redirectHome($msg, $page, 'back');
    // }

    // echo '</div>';

?>