<?php

    ob_start();

    $noNavbar = '';
    include "init.php";

    if (isset($_SESSION['Username'])) {
        header('Location: levels.php'); // Redirect Register page
    }


    $_SESSION['url']='levels.php';

// Check If The User Admin Coming Form HTTP Request Post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashPass = sha1($password);

        // Check If The User Admin Exist In Database
        $stmt = $con->prepare("SELECT 
                                    UserID, Username, `Password` 
                                FROM 
                                    `admin_account` 
                                WHERE 
                                    Username = ? 
                                AND 
                                    `Password` = ?");

        $stmt->execute(array($username, $hashPass));
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

        // If The Count > 0 this database contain Username
        if ($count > 0) {
            $_SESSION['Username'] = $username;
            $_SESSION['ID'] = $row['UserID'];
            header('Location: levels.php');
            exit();
        }
        else {echo "<div class='error'>يا حمار الداتا غلط</div>";}
    }

?>

    <div class="login-container">
		<div class="img">
			<img src="layout/img/img.svg">
		</div>
		<div class="login-content">
            <form  action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
				<img src="layout/img/avatar.svg">
				<h2 class="title"><?php echo lang('WELCOME')?></h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5><?php echo lang('USERNAME')?></h5>
                        <input type="text" name="username" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5><?php echo lang('PASSWORD')?></h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>
                
                <input type="submit" class="btn" value="<?php echo lang('LOGIN')?>">
            </form>
        </div>
    </div>

<?php
    include "include/templete/footer.php";
    ob_end_flush();
?>
