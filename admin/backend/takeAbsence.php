<?php

    include "../init.php";

    if (isset($_POST['week1'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_one` (Student_ID, Week1) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week1.php");
        
    }

    if (isset($_POST['week2'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_one` (Student_ID, Week2) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week1.php");
        
    }
    if (isset($_POST['week3'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_one` (Student_ID, Week3) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week1.php");
        
    }
    if (isset($_POST['week4'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_one` (Student_ID, Week4) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week1.php");
        
    }
    if (isset($_POST['week5'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_one` (Student_ID, Week5) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week1.php");
        
    }
    if (isset($_POST['week6'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_one` (Student_ID, Week6) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week1.php");
        
    }
    if (isset($_POST['week7'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_one` (Student_ID, Week7) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week1.php");
        
    }
    if (isset($_POST['week8'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_one` (Student_ID, Week8) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week1.php");
        
    }

// ------ Level 2
    if (isset($_POST['week9'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_two` (Student_ID, Week1) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week2.php");
        
    }

    if (isset($_POST['week10'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_two` (Student_ID, Week2) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week2.php");
        
    }
    if (isset($_POST['week11'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_two` (Student_ID, Week3) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week2.php");
        
    }
    if (isset($_POST['week12'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_two` (Student_ID, Week4) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week2.php");
        
    }
    if (isset($_POST['week13'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_two` (Student_ID, Week5) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week2.php");
        
    }
    if (isset($_POST['week14'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_two` (Student_ID, Week6) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week2.php");
        
    }
    if (isset($_POST['week15'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_two` (Student_ID, Week7) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week2.php");
        
    }
    if (isset($_POST['week16'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_two` (Student_ID, Week8) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week2.php");
        
    }

// ------ Level 3
    if (isset($_POST['week17'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_three` (Student_ID, Week1) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week3.php");
        
    }

    if (isset($_POST['week18'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_three` (Student_ID, Week2) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week3.php");
        
    }
    if (isset($_POST['week19'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_three` (Student_ID, Week3) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week3.php");
        
    }
    if (isset($_POST['week20'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_three` (Student_ID, Week4) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week3.php");
        
    }
    if (isset($_POST['week21'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_three` (Student_ID, Week5) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week3.php");
        
    }
    if (isset($_POST['week22'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_three` (Student_ID, Week6) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week3.php");
        
    }
    if (isset($_POST['week23'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_three` (Student_ID, Week7) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week3.php");
        
    }
    if (isset($_POST['week24'])) {

        $uid = $_POST['choose_user'];
        $week = $_POST['week'];
        
        $stmt = $con->prepare("INSERT INTO `student_three` (Student_ID, Week8) VALUES (:zid, :zweek)");
        $stmt->execute(Array(
            'zid' => $uid,
            'zweek' => $week
        ));

        header("Location: ../weeks/week3.php");
        
    }


    include "../include/templete/footer.php";

?>