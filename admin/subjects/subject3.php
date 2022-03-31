<?php
ob_start();

$pageTitle = 'Subject';
$file = '';

include "../init.php";

$_SESSION['url']='subjects/subject3.php';

if (!isset($_SESSION['Username'])) {
    header('Location: ../login.php'); // Redirect Register page
}

?>

    <center>
        <h1 style="
                    background-image: var(--linear-gradient);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">
            <?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar') echo '<a class="add-btn" href="#"><i class="fas fa-plus-circle"></i></a> '; echo lang('SUBJECT_THIRD_YEAR'); if (!isset($_SESSION['lang']) || $_SESSION['lang'] == 'en') echo ' <a class="add-btn" href="#"><i class="fas fa-plus-circle"></i></a>';?>
        </h1>
    </center>
    <div>
        <div class="modal hidden grid">
            <button class="close-modal">&times;</button>
            <div class="caption">
                <h2>Add Subject</h2>
            </div>
            <form class="grid" method="POST" action="../backend/newSubject.php?do=third" enctype="multipart/form-data">
                <div class="add-form grid">
                    <div class="grid">
                        <label>Subject Name</label>
                        <input type="text" name="subject" placeholder="Subject Name..." required>
                    </div>
                    <div class="grid">
                        <label>Doctor Name</label>
                        <input type="text" name="doctor" placeholder="Doctor Name">
<!--                        <select name="doctor" required>-->
<!--                            <option value="Mohamed">Level 1</option>-->
<!--                            <option value="Ahmed">Level 2</option>-->
<!--                            <option value="Mahmoud">Level 3</option>-->
<!--                        </select>-->
                    </div>
                </div>
                <div class="add-form grid">
                    <div class="grid">
                        <label>Subjet Photo</label>
                        <input type="file" name="subjectPhoto" placeholder="your username..." required>
                    </div>
                </div>
                <div class="add-form grid">
                    <div class="grid">
                    </div>
                </div>
                <input class="next" type="submit" value="Submit">
            </form>
        </div>
        <div class="overlay hidden"></div>
    </div>

<?php
$stmt = $con->prepare("SELECT * FROM `subject` WHERE `SubjectYear` = 3");
$stmt->execute();
$rows = $stmt->fetchAll();
?>

    <!-- =================== Subject Page =================== -->
    <!--Parent-->
    <div class="parent">

        <!-- Subjects -->
        <?php foreach ($rows as $row) { ?>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2></h2>
                        <h3><?php echo $row['SubjectName']; ?></h3>
                        <img src="<?php echo $base_url . $row['Subject_Photo'];?>">
                        <p><?php echo $row['Doctor_Name']; ?></p>
                        <a href="../levels/level2.php">View</a>
                    </div>
                </div>
            </div>

        <?php }?>

    </div>

<?php
include "../include/templete/footer.php";
?>