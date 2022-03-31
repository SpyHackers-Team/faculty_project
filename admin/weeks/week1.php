<?php

    ob_start(); // Output Buffering Start
    session_start();

    $pageTitle = 'Weeks';

    if (!isset($_SESSION['Username'])) {
        header('Location: login.php'); // Redirect Register page
    }
    
    $file = '';
    
    include "../init.php";

    $stmt = $con->prepare("SELECT * FROM student_account");
    $stmt->execute();
    $rows = $stmt->fetchAll();


?>

    <!-- =================== Weeks body =================== -->
    <section class="week-container">
            <div class="app-paper">
                <div class="paper-title">Choose week</div>
                <form action="">
                    <!-- =================== Week1 =================== -->
                    <input type="radio" name="brandtype" id="1" class ="hidebx">
                    <label for="1" class="lbl-radio one">
                        <div class="display-box">
                            <div class="name">week1</div>
                        </div>
                    </label>
                    <!-- =================== Week2 =================== -->
                    <input type="radio" name="brandtype" id="2" class ="hidebx">
                    <label for="2" class="lbl-radio two">
                        <div class="display-box">
                            <div class="name">week2</div>
                        </div>
                    </label>
                    <!-- =================== Week3 =================== -->
                    <input type="radio" name="brandtype" id="3" class ="hidebx">
                    <label for="3" class="lbl-radio three">
                        <div class="display-box">
                            <div class="name">week3</div>
                        </div>
                    </label>
                    <!-- =================== Week4 =================== -->
                    <input type="radio" name="brandtype" id="4" class ="hidebx">
                    <label for="4" class="lbl-radio four">
                        <div class="display-box">
                            <div class="name">week4</div>
                        </div>
                    </label>
                    <!-- =================== Week5 =================== -->
                    <input type="radio" name="brandtype" id="5" class ="hidebx">
                    <label for="5" class="lbl-radio five">
                        <div class="display-box">
                            <div class="name">week5</div>
                        </div>
                    </label>
                    <!-- =================== Week6 =================== -->
                    <input type="radio" name="brandtype" id="6" class ="hidebx">
                    <label for="6" class="lbl-radio six">
                        <div class="display-box">
                            <div class="name">week6</div>
                        </div>
                    </label>
                    <!-- =================== Week7 =================== -->
                    <input type="radio" name="brandtype" id="7" class ="hidebx">
                    <label for="7" class="lbl-radio seven">
                        <div class="display-box">
                            <div class="name">week7</div>
                        </div>
                    </label>
                    <!-- =================== Week8 =================== -->
                    <input type="radio" name="brandtype" id="8" class ="hidebx">
                    <label for="8" class="lbl-radio eight">
                        <div class="display-box">
                            <div class="name">week8</div>
                        </div>
                    </label>
                </form>
            </div>
            <!-- =================== Pop-Up Modals =================== -->
            <div>
                <!-- =================== modal1 pop-up =================== -->
                <div class="modal modal1 hidden week-modal" id="modal">
                    <button class="close-modal close-modal1">&times;</button>
                    <h1>week1</h1>
                    <form class="attendance-popup" method="POST" action="../backend/takeAbsence.php">
                        <select name="choose_user"><?php
                            foreach ($rows as $row) {?>
                                <option value=<?php echo $row['UserID'] ?>><?php echo $row['Username']?></option>
                            <?php }?>
                        </select>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week1-Attend" value="attend">
                            <label for="week1-Attend">
                                <div class="Attendance">Attend</div>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week1-Absent"  value="absent">
                            <label for="week1-Absent">
                                <div class="Attendance">Absent</div>
                            </label>
                        </div>
                        <input type="submit" value="Submit" name="week1">
                    </form>
                </div>
                <!-- =================== modal2 pop-up =================== -->
                <div class="modal modal2 hidden week-modal" id="modal">
                    <button class="close-modal close-modal2">&times;</button>
                    <h1>week2</h1>
                    <form class="attendance-popup" method="POST" action="../backend/takeAbsence.php">
                        <select name="choose_user">
                            <?php
                            foreach ($rows as $row) {?>
                                <option value=<?php echo $row['UserID'] ?>><?php echo $row['Username']?></option>
                            <?php }?>
                        </select>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week2-Attend" value="attend">
                            <label for="week2-Attend">
                                <div class="Attendance">Attend</div>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week2-Absent"  value="absent">
                            <label for="week2-Absent">
                                <div class="Attendance">Absent</div>
                            </label>
                        </div>
                        <input type="submit" value="Submit" name="week2">
                    </form>
                </div>
                <!-- =================== modal3 pop-up =================== -->
                <div class="modal modal3 hidden week-modal" id="modal">
                    <button class="close-modal close-modal3">&times;</button>
                    <h1>week3</h1>
                    <form class="attendance-popup" method="POST" action="../backend/takeAbsence.php">
                        <select name="choose_user">
                            <?php
                            foreach ($rows as $row) {?>
                                <option value=<?php echo $row['UserID'] ?>><?php echo $row['Username']?></option>
                            <?php }?>
                        </select>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week3-Attend" value="attend">
                            <label for="week3-Attend">
                                <div class="Attendance">Attend</div>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week3-Absent"  value="absent">
                            <label for="week3-Absent">
                                <div class="Attendance">Absent</div>
                            </label>
                        </div>
                        <input type="submit" value="Submit" name="week3">
                    </form>
                </div>
                <!-- =================== modal4 pop-up =================== -->
                <div class="modal modal4 hidden week-modal" id="modal">
                    <button class="close-modal close-modal4">&times;</button>
                    <h1>week4</h1>
                    <form class="attendance-popup" method="POST" action="../backend/takeAbsence.php">
                        <select name="choose_user">
                            <?php
                            foreach ($rows as $row) {?>
                                <option value=<?php echo $row['UserID'] ?>><?php echo $row['Username']?></option>
                            <?php }?>
                        </select>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week4-Attend" value="attend">
                            <label for="week4-Attend">
                                <div class="Attendance">Attend</div>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week4-Absent"  value="absent">
                            <label for="week4-Absent">
                                <div class="Attendance">Absent</div>
                            </label>
                        </div>
                        <input type="submit" value="Submit" name="week4">
                    </form>
                </div>
                <!-- =================== modal5 pop-up =================== -->
                <div class="modal modal5 hidden week-modal" id="modal">
                    <button class="close-modal close-modal5">&times;</button>
                    <h1>week5</h1>
                    <form class="attendance-popup" method="POST" action="../backend/takeAbsence.php">
                        <select name="choose_user">
                            <?php
                            foreach ($rows as $row) {?>
                                <option value=<?php echo $row['UserID'] ?>><?php echo $row['Username']?></option>
                            <?php }?>
                        </select>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week5-Attend" value="attend">
                            <label for="week5-Attend">
                                <div class="Attendance">Attend</div>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week5-Absent"  value="absent">
                            <label for="week5-Absent">
                                <div class="Attendance">Absent</div>
                            </label>
                        </div>
                        <input type="submit" value="Submit" name="week5">
                    </form>
                </div>
                <!-- =================== modal6 pop-up =================== -->
                <div class="modal modal6 hidden week-modal" id="modal">
                    <button class="close-modal close-modal6">&times;</button>
                    <h1>week6</h1>
                    <form class="attendance-popup" method="POST" action="../backend/takeAbsence.php">
                        <select name="choose_user">
                            <?php
                            foreach ($rows as $row) {?>
                                <option value=<?php echo $row['UserID'] ?>><?php echo $row['Username']?></option>
                            <?php }?>
                        </select>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week6-Attend" value="attend">
                            <label for="week6-Attend">
                                <div class="Attendance">Attend</div>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week6-Absent"  value="absent">
                            <label for="week6-Absent">
                                <div class="Attendance">Absent</div>
                            </label>
                        </div>
                        <input type="submit" value="Submit" name="week6">
                    </form>
                </div>
                <!-- =================== modal7 pop-up =================== -->
                <div class="modal modal7 hidden week-modal" id="modal">
                    <button class="close-modal close-modal7">&times;</button>
                    <h1>week7</h1>
                    <form class="attendance-popup" method="POST" action="../backend/takeAbsence.php">
                        <select name="choose_user">
                            <?php
                            foreach ($rows as $row) {?>
                                <option value=<?php echo $row['UserID'] ?>><?php echo $row['Username']?></option>
                            <?php }?>
                        </select>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week7-Attend" value="attend">
                            <label for="week7-Attend">
                                <div class="Attendance">Attend</div>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week7-Absent"  value="absent">
                            <label for="week7-Absent">
                                <div class="week">Absent</div>
                            </label>
                        </div>
                        <input type="submit" value="Submit" name="week7">
                    </form>
                </div>
                <!-- =================== modal8 pop-up =================== -->
                <div class="modal modal8 hidden week-modal" id="modal">
                    <button class="close-modal close-modal8">&times;</button>
                    <h1>week8</h1>
                    <form class="attendance-popup" method="POST" action="../backend/takeAbsence.php">
                        <select name="choose_user">
                            <?php
                            foreach ($rows as $row) {?>
                                <option value=<?php echo $row['UserID'] ?>><?php echo $row['Username']?></option>
                            <?php }?>
                        </select>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week8-Attend" value="attend">
                            <label for="week8-Attend">
                                <div class="Attendance">Attend</div>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="week" class="attend-input" id="week8-Absent"  value="absent">
                            <label for="week8-Absent">
                                <div class="Attendance">Absent</div>
                            </label>
                        </div>
                        <input type="submit" value="Submit" name="week8">
                    </form>
                </div>
                
                <div class="overlay hidden"></div> 
            </div>
        </section>
        <script src="<?php if(isset($file)) {echo "../";} ?>layout/js/week-popup.js"></script>
<?php

    include "../include/templete/footer.php";

    ob_end_flush();
?>