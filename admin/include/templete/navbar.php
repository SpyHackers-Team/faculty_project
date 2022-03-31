        <!-- =================== Navbar =================== -->
        <header class="grid navbar <?php if (!isset($noNavbar)) {echo "rela";}?>">
            <?php if (!isset($noNavbar)) {
                echo '<a class="line-grad"';
                if(isset($file)) {echo 'href="../levels.php">';}
                else {echo 'href="levels.php">';};
                echo 'Spy Team</a>';
            }?>
            <div class="grid nav-buttons">
                <form method="post" action="<?php if(isset($file)) echo "../";?>test.php" style="margin-top: 5px;">
                    <input type="hidden" name="url" value="<?php echo $_SESSION['url'];?>">
                    <input type="submit" name="en" value="EN" style="font-size: 20px;padding: 5px 15px; margin-right: 15px;border: solid 2px #00f;background: transparent;color: #0d0dab;cursor: pointer;">
                    <input type="submit" name="ar" value="AR" style="font-size: 20px;margin-right: 15px;border: solid 2px #00f;padding: 5px 15px;background: transparent;color: #0d0dab;cursor: pointer;">
                </form>
                <a class="mode-btn"><i class="far fa-moon mbtn"></i></a>
                <?php if (!isset($noNavbar)) {
                    if(isset($file)) {echo '<a class="mode-btn" href="../logout.php">';}
                    else {echo '<a class="mode-btn" href="logout.php">';}
                    echo '<i class="fas fa-sign-out-alt"></i></a>';
                }?>
            </div>
        </header>