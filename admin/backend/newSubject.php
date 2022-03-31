<?php
ob_start(); // Output Buffering Start
session_start();

$noNavbar = '';
$file = '';
include '../init.php';

$do = '';
if (isset($_GET['do']))
    $do = $_GET['do'];
else
    header("Location: ../levels.php");


$validation = array('jpeg', 'jpg', 'png');
$path = '../../uploads/';

// ------------------------------------ Add New Subject in First Year
// Check If The User Admin Coming Form HTTP Request Post
if ($do == 'first') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $subject    = $_POST['subject'];
        $doctor     = $_POST['doctor'];
        $img_name = $_FILES['subjectPhoto']['name'];
        $img_temp = $_FILES['subjectPhoto']['tmp_name'];


        $ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

        $final_name = rand(1000000, 10000000000) . $ext;

        if (in_array($ext, $validation)) {
            $path1 = $path . strtolower($final_name);

            if (move_uploaded_file($img_temp, $path1)) {

                $stmt = $con->prepare("INSERT INTO `subject`
                                    (`SubjectName`, `Doctor_Name`, `Subject_Photo`,`SubjectYear`)
                                VALUES
                                    (:zsubject, :zdoctor, :zphoto, 1)");
                $stmt->execute(Array(
                    'zsubject' => $subject,
                    'zdoctor' => $doctor,
                    'zphoto' => 'uploads/' . $final_name,
                ));
            }
        }
      header("Location: ../subjects/subject1.php");
    }
}

// ------------------------------------ Add New Student in Second Year
// Check If The User Admin Coming Form HTTP Request Post
if ($do == 'second') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $subject = $_POST['subject'];
        $doctor = $_POST['doctor'];
        $img_name = $_FILES['subjectPhoto']['name'];
        $img_temp = $_FILES['subjectPhoto']['tmp_name'];


        $ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

        $final_name = rand(1000000, 10000000000) . $ext;

        if (in_array($ext, $validation)) {
            $path1 = $path . strtolower($final_name);

            if (move_uploaded_file($img_temp, $path1)) {

                $stmt = $con->prepare("INSERT INTO `subject`
                                    (`SubjectName`, `Doctor_Name`, `Subject_Photo`,`SubjectYear`)
                                VALUES
                                    (:zsubject, :zdoctor, :zphoto, 2)");
                $stmt->execute(array(
                    'zsubject' => $subject,
                    'zdoctor' => $doctor,
                    'zphoto' => 'uploads/' . $final_name,
                ));
            }
        }
        header("Location: ../subjects/subject2.php");
    }
}

// ------------------------------------ Add New Student in Third Year
// Check If The User Admin Coming Form HTTP Request Post
if ($do == 'third') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $subject = $_POST['subject'];
        $doctor = $_POST['doctor'];
        $img_name = $_FILES['subjectPhoto']['name'];
        $img_temp = $_FILES['subjectPhoto']['tmp_name'];


        $ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

        $final_name = rand(1000000, 10000000000) . $ext;

        if (in_array($ext, $validation)) {
            $path1 = $path . strtolower($final_name);

            if (move_uploaded_file($img_temp, $path1)) {

                $stmt = $con->prepare("INSERT INTO `subject`
                                    (`SubjectName`, `Doctor_Name`, `Subject_Photo`,`SubjectYear`)
                                VALUES
                                    (:zsubject, :zdoctor, :zphoto, 3)");
                $stmt->execute(array(
                    'zsubject' => $subject,
                    'zdoctor' => $doctor,
                    'zphoto' => 'uploads/' . $final_name,
                ));
            }
        }
        header("Location: ../subjects/subject3.php");
    }
}

ob_end_flush();
?>