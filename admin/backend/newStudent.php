<?php 

ob_start(); // Output Buffering Start
session_start();

$noNavbar = '';
$file = '';
include '../init.php';

// ------------------------------------ Add New Student in First Year
// Check If The User Admin Coming Form HTTP Request Post
if (isset($_POST['add1'])) {

    $fname      = $_POST['fname'];
    $lname      = $_POST['lname'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $hashPass   = sha1($password);

    $stmt = $con->prepare("INSERT INTO `student_account` 
                                (`FirstName`, `LastName`, `Username`, `Password`, `YearID`) 
                            VALUES 
                                (:zfn, :zln, :zuser, :zpass, 1)");
    $stmt->execute(Array(
        'zfn' => $fname,
        'zln' => $lname,
        'zuser' => $username,
        'zpass' => $hashPass
    ));

    $stmt2 = $con->prepare("INSERT INTO `student_one` 
                                (`Week1`, `Week2`, `Week3`, `Week4`, `Week5`, `Week8`, `Week7`, `Week8`) 
                            VALUES 
                                (Null,Null,Null,Null,Null,Null,Null,Null)");

    header("Location: ../levels/level1.php");
}

// ------------------------------------ Add New Student in Second Year
// Check If The User Admin Coming Form HTTP Request Post
if (isset($_POST['add2'])) {

    $fname      = $_POST['fname'];
    $lname      = $_POST['lname'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $hashPass   = sha1($password);
    $yearid     = $_POST['year'];

    $stmt = $con->prepare("INSERT INTO `student_two` 
                                (`FirstName`, `LastName`, `Username`, `Password`, `YearID`) 
                            VALUES 
                                (:zfn, :zln, :zuser, :zpass, :zyear)");
    $stmt->execute(Array(
        'zfn' => $fname,
        'zln' => $lname,
        'zuser' => $username,
        'zpass' => $hashPass,
        'zyear' => $yearid
    ));
    header("Location: ../levels/level2.php");
}

// ------------------------------------ Add New Student in Third Year
// Check If The User Admin Coming Form HTTP Request Post
if (isset($_POST['add3'])) {

    $fname      = $_POST['fname'];
    $lname      = $_POST['lname'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $hashPass   = sha1($password);
    $yearid     = $_POST['year'];

    $stmt = $con->prepare("INSERT INTO `student_three` 
                                (`FirstName`, `LastName`, `Username`, `Password`, `YearID`) 
                            VALUES 
                                (:zfn, :zln, :zuser, :zpass, :zyear)");
    $stmt->execute(Array(
        'zfn' => $fname,
        'zln' => $lname,
        'zuser' => $username,
        'zpass' => $hashPass,
        'zyear' => $yearid
    ));
    header("Location: ../levels/level3.php");
}

    include "../include/templete/footer.php";
?>