<?php 

    /*
    *****************************************
    ** First Year Page
    *****************************************
    */

    ob_start(); // Output Buffering Start
    session_start();

    $pageTitle = 'First Year';

    if (!isset($_SESSION['Username'])) {
        header('Location: ../login.php'); // Redirect Register page
    }

    $file = '';
    include '../init.php';


?>

        <!-- =================== Table Design =================== -->
        <div class="circle">
            <div class="big-circle"></div>
            <div class="medium-circle"></div>
            <div class="small-circle"></div>
        </div>
        <section class="attend-table grid">
            <div class="caption grid">
                <a class="absent_btn" href="../weeks/week3.php">get</a>
                <h2>Attendance Table Level 3</h2>
                <a class="add-btn" href="#"><i class="fas fa-plus-circle"></i></a>
                <div>
                    <div class="modal hidden grid">
                        <button class="close-modal">&times;</button>
                        <div class="caption">
                            <h2>Add User</h2>
                        </div>
                        <form class="grid" method="POST" action="../backend/newStudent.php">
                            <div class="add-form grid">
                                <div class="grid">
                                    <label>First Name</label>
                                    <input type="text" name="fname" placeholder="first name..." required>
                                </div>
                                <div class="grid">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" placeholder="last name..." required>
                                </div>
                            </div>
                            <div class="add-form grid">
                                <div class="grid">
                                    <label>Username</label>
                                    <input type="text" name="username" placeholder="your username..." required>
                                </div>
                                <div class="grid">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="password..." required>
                                </div>
                            </div>
                            <div class="add-form grid">
                                <div class="grid">
                                    <label>Student Level</label>
                                    <select name="year">
                                        <option value=1>Level 1</option>
                                        <option value=2>Level 2</option>
                                        <option value=3>Level 3</option>
                                    </select>
                                </div>
                            </div>
                            <input class="next" type="submit" value="Submit" name="add3">
                        </form>
                    </div>
                    <div class="overlay hidden"></div>
                </div>
            </div>
<?php
    // Select All Users Except Admin
    $stmt = $con->prepare("SELECT * FROM `student_three`");

    // Execute The Statement
    $stmt->execute();

    // Assign To Vaiable
    $rows = $stmt->fetchAll();
?>

            <div class="tb-scroll grid">
                <table class="table">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>L1-Attend</th>
                            <th>L2-Attend</th>
                            <th>L3-Attend</th>
                            <th>L4-Attend</th>
                            <th>L5-Attend</th>
                            <th>L6-Attend</th>
                            <th>L7-Attend</th>
                            <th>L8-Attend</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
    
                        <?php 

                        foreach($rows as $row) {
                            echo "<tr>";
                            echo "<td>" . $row['FirstName'] . "</td>";
                            echo "<td>" . $row['LastName'] . "</td>";
                            echo "<td>" . $row['Username'] . "</td>";
                            echo "<td>" . $row['Week1'] . "</td>";
                            echo "<td>" . $row['Week2'] . "</td>";
                            echo "<td>" . $row['Week3'] . "</td>";
                            echo "<td>" . $row['Week4'] . "</td>";
                            echo "<td>" . $row['Week5'] . "</td>";
                            echo "<td>" . $row['Week6'] . "</td>";
                            echo "<td>" . $row['Week7'] . "</td>";
                            echo "<td>" . $row['Week8'] . "</td>";
                            echo '<td class="admin-opt grid">
                                        <a href="#"><i class="fas fa-minus-circle"></i> Delete</a>
                                        <a href="#"><i class="fas fa-pencil-ruler"></i> Edit</a>
                                </td>';
                            echo "</tr>";
                        }

                        ?>
                        
                    </tbody>
                </table>
            </div>
        </section>
                

<?php
    include "../include/templete/footer.php";

    ob_end_flush();
?>