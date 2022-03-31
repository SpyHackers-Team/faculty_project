<?php

    $file = '';
    $bootstrab = '';
    include "../init.php";

    // Check If Get Request ID Is Numeric & Get The Integer Value Of It
    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;

    // Select All Data Depend On This ID
    $stmt = $con->prepare("SELECT * FROM `student_account` WHERE UserID = ? LIMIT 1");

    // Execute Query
    $stmt->execute(array($id));

    // Fetsh The Data
    $row = $stmt->fetch();

    // The Row Count
    $count = $stmt->rowCount();

    if ($count > 0) { ?>

        <!-- =================== register body =================== -->
        <div class="register-container">
            <section class="signup">
                <div class="logo">
                    <h1>Edit Student</h1>
                </div>
                <!-- =================== edit form =================== -->
                <form action="edit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id ?>"/>

                    <input type="text" class="form-control" placeholder="Firstname" name="fname" value="<?php $row['Firstname']?>">
                    <input type="text" class="form-control" placeholder="Lastname" name="lname" value="<?php $row['Lastname']?>">
                    <input type="text" class="form-control" placeholder="Username" name="user" value="<?php $row['Username']?>">
                    <input type="text" class="form-control" placeholder="Password" name="pass" value="<?php $row['Password']?>">
                    <a href="weeks.html"><input type="button" class="btn" value="signup"></a>
                </form>
            </section>
        </div>

<?php }

    include "../include/templete/footer.php";

?>