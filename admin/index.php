<?php
    ob_start();
    session_start();

    $noNavbar = '';
    
    include "init.php";
?>
        <!-- =================== Background Animation =================== -->
        <div class="face-ani">
            <div class="face-text">
                <div></div>
                <p>By Damanhour University</p>
                <h1>Attendance</h1>
                <a href="login.php">Sign in</a>
            </div>
        </div>

<?php
    include $temp . "footer.php";
    ob_end_flush();
?>